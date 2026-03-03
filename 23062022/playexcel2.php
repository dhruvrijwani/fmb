<?php


class PostData
{

    public function callback()
    {
        $cstm_keyword = $_COOKIE['cstm_ppc_keyword'];
        $cstm_channel = $_COOKIE['cstm_ppc_channel'];
        $cstm_campaign = $_COOKIE['cstm_ppc_campaign'];
        $cstm_placement = $_COOKIE['cstm_ppc_placement'];
        $cstm_device = $_COOKIE['cstm_ppc_device'];

        $name = $_REQUEST['name'];
        $mobile = str_replace(' ', '', $_REQUEST['mobile']);
        $email = $_REQUEST['email'];
        $qualification = $_REQUEST['qualification'];
        $city = $_REQUEST['city'];
        $source = $_REQUEST['source'];
        $link = $_REQUEST['link'];
        $message = '';

        // Google Sheet Interation------------------
        $postFields .= "&entry.1195990442=" . $name;
        $postFields .= "&entry.439867243=" . $mobile;
        $postFields .= "&entry.216478054=" . $email;
        $postFields .= "&entry.2082367118=" . $qualification;
        $postFields .= "&entry.701390662=" . $city;
        $postFields .= "&entry.889816403=" . $source;
        $postFields .= '&entry.256518136=' . urlencode($_COOKIE['cstm_ppc_campaign']);
        $postFields .= '&entry.1298025671=' . urlencode($_COOKIE['cstm_ppc_channel']);
        $postFields .= '&entry.1726938170=' . urlencode($_COOKIE['cstm_ppc_keyword']);
        $postFields .= '&entry.1442884182=' . urlencode($_COOKIE['cstm_ppc_placement']);
        $postFields .= '&entry.992115574=' . urlencode($_COOKIE['cstm_ppc_device']);
        $postFields .= "&entry.23874976=" . urlencode($link);
        $postFields .= "&entry.1228297560=" . urlencode($_COOKIE['Source']);

        $ch1 = curl_init();
        curl_setopt($ch1, CURLOPT_URL, "https://docs.google.com/forms/d/e/1FAIpQLSfRy93JQlo88ddG5r_F8GTWSYjlzx7zkVCWHGLKwRln2ChTiw/formResponse");
        curl_setopt($ch1, CURLOPT_POST, 1);
        curl_setopt($ch1, CURLOPT_POSTFIELDS, $postFields);
        curl_setopt($ch1, CURLOPT_HEADER, 0);
        curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);

        $result1 = curl_exec($ch1);

        // $country = "India";
        // $coutrycode = '+91';
        // $projects = 'a1X280000002r3T';
        // $campaingterm = '';
        // $campaing = $cstm_campaign;
        // $keywords = $cstm_keyword;
        // $subsource = '';

        // if ($cstm_channel == 'GoogleSearch') {
        //     $subsource = 'Google Search';
        // }

        // if ($cstm_channel == 'GoogleDisplay') {
        //     $subsource = 'Google Display';
        // }

        // if ($cstm_channel == 'Taboola') {
        //     $subsource = 'Taboola';
        // }

        // if ($cstm_channel == 'Desipearl') {
        //     $subsource = 'Desipearl';
        // }

        // if ($cstm_channel == 'Adgebra') {
        //     $subsource = 'Adgebra';
        // }

        // if ($cstm_channel == 'FacebookConv') {
        //     $subsource = 'Facebook WBC';
        // }

        // if ($cstm_channel == 'FacebookLeadGen') {
        //     $subsource = 'Facebook Leagen';
        // }

        // $saleforce = $this->saleforce_api($name, $email, $mobile, $country, $coutrycode, $projects, $campaingterm, $campaing, $keywords, $subsource);
    }




    // public function saleforce_api($name, $email, $mobile, $country, $coutrycode, $projects, $campaingterm, $campaing, $keywords, $subsource)
    // {

    //     //define("USERNAME", 'happinest.amura@mahindra.com');
    //     //define("PASSWORD", 'Amura.happinest123');
    //     //define("SECURITY_TOKEN", 'dyoMlyrLjfgQ0DtRa4c4LcZFn');


    //     define("USERNAME", 'happinest.realatte@mahindra.com');
    //     define("PASSWORD", 'Atulya_1');
    //     define("SECURITY_TOKEN", 'q6kVQK6CTuHzv4XgQUVcjH2Ia');
    //     require_once('soapclient/SforcePartnerClient.php');
    //     $mySforceConnection = new SforcePartnerClient();
    //     $mySforceConnection->createConnection("soapclient/enterprise_campaign_prod.xml");
    //     //$mySforceConnection->createConnection("soapclient/enterprisewsdl.xml");
    //     //$mySforceConnection->setEndpoint('https://test.salesforce.com/services/Soap/c/42.0/0DF0K000000MAJI');
    //     $mySforceConnection->setEndpoint('https://login.salesforce.com/services/Soap/c/42.0/0DF0K000000MAJI');

    //     $loginResult = $mySforceConnection->login(USERNAME, PASSWORD . SECURITY_TOKEN);
    //     /*echo "<pre>";print_r($loginResult);echo "</pre>";//die;*/
    //     $parsedURL = parse_url($mySforceConnection->getLocation());

    //     define("_SFDC_SERVER_", "login");
    //     define("_WS_NAME_", 'WebToEnquireServiceCtrl');
    //     define("_WS_WSDL_", 'soapclient/WebToEnquireServiceCtrlLeadProd_WSDL.xml');
    //     //define ("_WS_ENDPOINT_", 'https://test.salesforce.com/services/wsdl/class/WebToEnquireServiceCtrl');
    //     define("_WS_ENDPOINT_", 'https://login.salesforce.com/services/wsdl/class/WebToEnquireServiceCtrl');
    //     define("_WS_NAMESPACE_", 'http://soap.sforce.com/schemas/class/WebToEnquireServiceCtrl');
    //     $client = new SoapClient(_WS_WSDL_);
    //     $sforce_header = new SoapHeader(_WS_NAMESPACE_, "SessionHeader", array("sessionId" => $mySforceConnection->getSessionId()));
    //     $client->__setSoapHeaders(array($sforce_header));
    //     $lead = new StdClass();
    //     $lead->Name = $name;
    //     $lead->Email = $email;
    //     $lead->Country = $country;
    //     $lead->Mobile = $mobile;
    //     $lead->Countrycode = $coutrycode;
    //     $lead->UniqueID = '';
    //     $lead->Project = $projects;
    //     $lead->Source = 'Digital';
    //     $lead->landingPageUrl = 'https://happinestboisar.mahindralifespaces.com';
    //     $lead->comment = '';
    //     $lead->refererName = '';
    //     $lead->refererNumber = '';
    //     $lead->LoyalieLead = '';
    //     $lead->dateSiteVisit = '';
    //     $lead->timeSiteVisit = '';
    //     $lead->chauffeurDrivenCar = '';
    //     $lead->Snacks = '';
    //     $lead->Beverage = '';
    //     $lead->campaignTerm = $campaingterm;
    //     $lead->Campaign = $campaing;
    //     $lead->Keyword = $keywords;
    //     $lead->subSource = $subsource;
    //     $leadData = array('wl' => $lead);
    //     /*echo "<pre>";print_r($leadData);echo "</pre>";*/
    //     $response = $client->createContactSr($lead);
    //     //echo "Success";
    //     //print_r($response);

    // }
}
