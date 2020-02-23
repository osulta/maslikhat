<?php

namespace backend\models;

use Yii;
use Imagine\Image\ManipulatorInterface;
use yii\imagine\Image;

class Slider extends \common\models\ImageWithDescription
{
    public $tmpImage;

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $this->created_at = time();
            if ($this->tmpImage) {
                $this->image = rand(0, 9999) . '-' . time() . '-slider.' . $this->tmpImage->extension;
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
            if ($this->tmpImage) {
                if (Image::thumbnail($this->tmpImage
                    ->tempName, 500, 260, ManipulatorInterface::THUMBNAIL_OUTBOUND)
                    ->save(Yii::getAlias('@frontend') . '/web/uploads/slider-images/' . $this->image, ['quality' => 80])) {
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
        $oldImage = Yii::getAlias('@frontend') . '/web/uploads/slider-images/' . $this->getOldAttribute('image');
        if (!unlink($oldImage)) {
            return false;
        }
    }
}
