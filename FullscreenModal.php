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
    public $notitle = false;

    /**
     * Initializes the widget.
     */
    public function init()
    {
    
       $this->options = array_merge([
           'class' => 'modal-fs fade',
       ], $this->options);
       $abc = $this->notitle;
       $padding = $this->modalBodyPadding===false? '0' : $this->modalBodyPadding;
       $this->getView()->registerCss("
        .modal-fs .modal-body{
          padding:{$padding};
        }
       ");
       if($this->notitle){
        $this->getView()->registerCss("
        .modal-fs .modal-body{
          top:5px;
          padding-top:0px;
        }
       ");
       $this->getView()->registerCss("
        .modal-fs .modal-header{
          display:none;
        }
       ");
       }

        parent::init();

        FullscreenModalAsset::register($this->getView());
    }
}
