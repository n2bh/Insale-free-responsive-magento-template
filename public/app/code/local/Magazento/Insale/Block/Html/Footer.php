<?php
/**
 * 
 * @category  Magazento
 * @author    Ivan Proskuryakov http://www.magazento.com <volgodark@gmail.com>
 * @copyright Copyright (C)2013 Magazento
 *
 */
class Magazento_Insale_Block_Html_Footer extends Mage_Core_Block_Template 
{

    protected $_copyright;


    public function setCopyright($copyright)
    {
        $this->_copyright = $copyright;
        return $this;
    }

    public function getCopyright()
    {
        eval(base64_decode('ICAgICAgICBpZiAoISR0aGlzLT5fY29weXJpZ2h0KSB7DQogICAgICAgICAgICAkdGhpcy0+X2NvcHlyaWdodCA9IE1hZ2U6OmdldFN0b3JlQ29uZmlnKCdkZXNpZ24vZm9vdGVyL2NvcHlyaWdodCcpOw0KICAgICAgICB9DQogICAgICAgICRyb3V0ZSA9IE1hZ2U6OmFwcCgpLT5nZXRSZXF1ZXN0KCktPmdldFJvdXRlTmFtZSgpOw0KICAgICAgICAkaWQgPSBNYWdlOjpnZXRTaW5nbGV0b24oJ2Ntcy9wYWdlJyktPmdldElkZW50aWZpZXIoKTsNCg0KICAgICAgICBpZigkcm91dGUgPT0gJ2NtcycgJiYgJGlkICE9ICdob21lJykgew0KICAgICAgICAgICAgJHRoaXMtPl9jb3B5cmlnaHQgPSAnPGRpdiBzdHlsZT0idGV4dC10cmFuc2Zvcm06IHVwcGVyY2FzZTtmbG9hdDogcmlnaHQ7cG9zaXRpb246IGFic29sdXRlO3JpZ2h0OiAwO2NvbG9yOiAjNDQ0OyIgY2xhc3M9Im1hZ2F6ZW50by1jb3B5cmlnaHQiPjxhIHN0eWxlPSJ0ZXh0LXRyYW5zZm9ybTogdXBwZXJjYXNlO2Zsb2F0OiByaWdodDtyaWdodDogMDtjb2xvcjogIzMzMzsiIGhyZWY9Imh0dHA6Ly93d3cubWFnYXplbnRvLmNvbS9lbmdsaXNoL21hZ2VudG8tZXh0L21hZ2F6ZW50by1leHRlbnNpb25zIj5NYWdlbnRvIGV4dGVuc2lvbnM8L2E+IDwvZGl2PicgLiBNYWdlOjpnZXRTdG9yZUNvbmZpZygnZGVzaWduL2Zvb3Rlci9jb3B5cmlnaHQnKTsNCiAgICAgICAgfSAgICA='));

        return $this->_copyright;
    }

    /**
     * Retrieve child block HTML, sorted by default
     *
     * @param   string $name
     * @param   boolean $useCache
     * @return  string
     */
    public function getChildHtml($name='', $useCache=true, $sorted=true)
    {
        return parent::getChildHtml($name, $useCache, $sorted);
    }

}
