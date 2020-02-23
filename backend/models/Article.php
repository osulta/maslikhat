<?php

namespace backend\models;

use Yii;
use Imagine\Image\ManipulatorInterface;
use yii\imagine\Image;

class Article extends \common\models\Session
{
    const ARTICLE = 'article';

    public $previewImage;

    public function beforeValidate()
    {
        if (parent::beforeValidate()) {
            $this->title_url_kz = Yii::$app->myHelper->transliterateToLatin($this->title_kz);
            $this->title_url_ru = Yii::$app->myHelper->transliterateToLatin($this->title_ru);
        }
        return parent::beforeValidate();
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $this->created_at = time();
            $this->type = Article::ARTICLE;
            if ($this->previewImage) {
                $this->preview_image = rand(0, 9999) . '-' . time() . '-' . $this->title_url_ru . '.' . $this->previewImage->extension;
                if (!$this->isNewRecord) {
                    $this->deleteOldImage();
                }
                $this->uploadImage();
            }
        }
        return parent::beforeSave($insert);
    }

    public function beforeDelete()
    {
        $this->deleteOldImage();
        return parent::beforeDelete();
    }

    protected function uploadImage()
    {
        if ($this->validate()) {
            if ($this->previewImage) {
                if (Image::thumbnail($this->previewImage
                    ->tempName, 600, 450, ManipulatorInterface::THUMBNAIL_OUTBOUND)
                    ->save(Yii::getAlias('@frontend') . '/web/uploads/preview-images/' . $this->preview_image, ['quality' => 80])) {
                    return true;
                } else {
                    return false;
                }
            }
        } else {
            return false;
        }
    }

    protected function deleteOldImage()
    {
        $oldImage = Yii::getAlias('@frontend') . '/web/uploads/preview-images/' . $this->getOldAttribute('preview_image');
        if (!unlink($oldImage)) {
            return false;
        }
    }
}
