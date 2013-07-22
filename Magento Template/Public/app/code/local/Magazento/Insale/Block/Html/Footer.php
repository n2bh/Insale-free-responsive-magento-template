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
        eval(base64_decode('ICAgICAgICBpZiAoISR0aGlzLT5fY29weXJpZ2h0KSB7DQogICAgICAgICAgICAkdGhpcy0+X2NvcHlyaWdodCA9IE1hZ2U6OmdldFN0b3JlQ29uZmlnKCdkZXNpZ24vZm9vdGVyL2NvcHlyaWdodCcpOw0KICAgICAgICB9DQogICAgICAgICRyb3V0ZSA9IE1hZ2U6OmFwcCgpLT5nZXRSZXF1ZXN0KCktPmdldFJvdXRlTmFtZSgpOw0KICAgICAgICAkaWQgPSBNYWdlOjpnZXRTaW5nbGV0b24oJ2Ntcy9wYWdlJyktPmdldElkZW50aWZpZXIoKTsNCg0KICAgICAgICBpZiAoKCRyb3V0ZSA9PSAnY21zJyAmJiAkaWQgIT0gJ2hvbWUnKSB8fCANCiAgICAgICAgICAgIChNYWdlOjphcHAoKS0+Z2V0RnJvbnRDb250cm9sbGVyKCktPmdldFJlcXVlc3QoKS0+Z2V0Q29udHJvbGxlck5hbWUoKSA9PSAncHJvZHVjdCcpKSB7DQogICAgICAgICAgICAkdGhpcy0+X2NvcHlyaWdodCA9ICc8ZGl2IHN0eWxlPSJ0ZXh0LXRyYW5zZm9ybTogdXBwZXJjYXNlO2Zsb2F0OiByaWdodDtwb3NpdGlvbjogYWJzb2x1dGU7cmlnaHQ6IDA7Y29sb3I6ICM0NDQ7IiBjbGFzcz0ibWFnYXplbnRvLWNvcHlyaWdodCI+PGEgc3R5bGU9InRleHQtdHJhbnNmb3JtOiB1cHBlcmNhc2U7ZmxvYXQ6IHJpZ2h0O3JpZ2h0OiAwO2NvbG9yOiAjMzMzOyIgaHJlZj0iaHR0cDovL3d3dy5tYWdhemVudG8uY29tL2VuZ2xpc2gvbWFnZW50by1leHQvbWFnYXplbnRvLWV4dGVuc2lvbnMiPk1hZ2VudG8gZXh0ZW5zaW9uczwvYT4gPC9kaXY+JyAuIE1hZ2U6OmdldFN0b3JlQ29uZmlnKCdkZXNpZ24vZm9vdGVyL2NvcHlyaWdodCcpOw0KICAgICAgICB9ICAgICAgICAgICAgDQogICAgICAgIA=='));
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
