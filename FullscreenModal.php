<?php

namespace lpaeb\fullscreenmodal;

use Yii;
use yii\helpers\ArrayHelper;
use yii\bootstrap5\Widget;
use yii\bootstrap5\Html;
use yii\bootstrap5\Modal;

/**
 * Fullscreen Modal
 * @author Sathti Seethaphon <dixonsatit@gmail.com>
 */
class FullscreenModal extends Modal
{
    public $modalBodyPadding= '20px;';

    /**
     * Initializes the widget.
     */
    public function init()
    {

       $this->options = array_merge([
           'class' => 'modal-fs fade',
       ], $this->options);

       $padding = $this->modalBodyPadding===false? '0' : $this->modalBodyPadding;
       $this->getView()->registerCss("
        .modal-fs .modal-body{
          padding:{$padding};
        }
       ");

        parent::init();

        FullscreenModalAsset::register($this->getView());
    }
}
