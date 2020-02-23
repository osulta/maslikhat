<?php

namespace backend\models;

use Yii;
use Imagine\Image\ManipulatorInterface;
use yii\imagine\Image;

class Deputy extends \common\models\Deputy
{
    public $image;

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $this->created_at = time();
            if ($this->image) {
                $this->avatar = rand(0, 9999) . '-' . time() . '-deputy.' . $this->image->extension;
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
            if ($this->image) {
                if (Image::thumbnail($this->image
                    ->tempName, 300, 400, ManipulatorInterface::THUMBNAIL_OUTBOUND)
                    ->save(Yii::getAlias('@frontend') . '/web/uploads/deputy-images/' . $this->avatar, ['quality' => 80])) {
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
        $oldImage = Yii::getAlias('@frontend') . '/web/uploads/deputy-images/' . $this->getOldAttribute('avatar');
        if (!unlink($oldImage)) {
            return false;
        }
    }
}
