<?php
class Refund_Retriever_Block_Adminhtml_Retriever extends Mage_Core_Block_Template
{

    public function curlrequest($data,$url)
      {
           $json_setting   =  json_encode($data);
           Mage::log('jsondata = '. $json_setting);
           $json_url       =  $url;
           $ch             =  curl_init( $json_url );      // Initializing curl
           $options        =  array(                       // Configuring curl options
                                      CURLOPT_RETURNTRANSFER  =>  true,
                                      //CURLOPT_USERPWD       =>  $username . “:” . $password,  // authentication
                                      CURLOPT_HTTPHEADER      =>  array("Content-type: application/json") ,
                                      CURLOPT_POSTFIELDS      =>  $json_setting,
                                      CURLOPT_SSL_VERIFYPEER  => false,
                                     // CURLOPT_HEADER          =>  true,
                                      //CURLOPT_NOBODY          =>  true
                                    );
           curl_setopt_array( $ch, $options );            // Setting curl options
           $result      =  curl_exec($ch);             // Getting jSON result string
           $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
           curl_close($ch);
           return $result; 

      }
      protected function _afterToHtml($html)
    {
          $url      =  Mage::getStoreConfig('retrieverconfig/options/endpointurl');
          $authkey  =  Mage::getStoreConfig('retrieverconfig/options/auth_key');
          $Authurl  =  $url."/u/".$authkey;
          $key      =  array("AUTH_TOKEN"=>$authkey);
          $result   =  $this->curlrequest($key,$Authurl);
          $data     =  json_decode($result, TRUE);
          //Get session Token Key //
          $session_token = $data['SESSION_TOKEN'];
          //echo $session_token;exit;
        
        echo "<iframe src='https://partners.refundretriever.com/magento/auth/s/".$session_token."' width:600 style='width:100%;height:900px;background-color:#fff'></iframe>"; 
      }

}
