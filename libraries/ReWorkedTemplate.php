<?php
class ReWorkedTemplate
{
    public $_utils;

    function __construct()
    {
        $this->_utils = new ReWorkedUtils();
    }

    // Render view
    public function getTemplate($templateName, $data = [])
    {
        echo $this->getTemplateContent($templateName, $data);
    }
    public function getTemplateContent($templateName, $data = [])
    {
        // Extract data to template
        if ($data !== null) {
            extract($data);
        }

        $templatePath  = "{$templateName}.php";

        // Start cleaning comments using buffering
        ob_start();
        global $func, $lo, $db, $cache, $config, $https_config, $row_setting, $lang, $jv0, $com, $deviceType, $source, $seo;
        include $templatePath;
        $htmlContent = ob_get_clean();
        return $this->_utils->removeHtmlComments($htmlContent);
    }
}
