<?php

namespace backend\models;

use Yii;
use Imagine\Image\ManipulatorInterface;
use yii\imagine\Image;

class Session extends \common\models\Session
{
    public $previewImage;

    public function beforeValidate()
    {
        if (parent::beforeValidate()) {
            $this->title_url = Yii::$app->myHelper->transliterateToLatin($this->title);
        }
        return parent::beforeValidate();
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $this->created_at = time();
            if ($this->previewImage) {
                $this->preview_image = rand(0, 9999) . '-' . time() . '-' . $this->title_url . '.' . $this->previewImage->extension;
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
                    ->tempName, 300, 200, ManipulatorInterface::THUMBNAIL_OUTBOUND)
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
