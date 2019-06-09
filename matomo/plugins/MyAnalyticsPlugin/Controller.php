<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

namespace Piwik\Plugins\MyAnalyticsPlugin;

use Piwik\View;
use Piwik\Common;

/**
 * A controller lets you for example create a page that can be added to a menu. For more information read our guide
 * http://developer.piwik.org/guides/mvc-in-piwik or have a look at the our API references for controller and view:
 * http://developer.piwik.org/api-reference/Piwik/Plugin/Controller and
 * http://developer.piwik.org/api-reference/Piwik/View
 */
class Controller extends \Piwik\Plugin\Controller
{
    public function index()
    {
        //vaciar parametros para pedir datos a las redes sociales
        $period = Common::getRequestVar('period','oneweek','string');
        $pageid = Common::getRequestVar('pageid','1','string');
        
        //pedir datos al api de facebook
        $facebookData=$this->getFacebookData();

        //pedir datos al api de twitter
        $twitterData=$this->getTwitterData();

        //pedir datos al api de instagram
        $instagramData=$this->getInstagramData();

        //juntar toda la info en un solo array con la estructura de [Action,Date,Facebook,Twitter,Instagram]
        $allData = array_merge($facebookData,$twitterData,$instagramData);
        /* $allData = array_unique($allData,true); */
        $tempArray[from]=[];
        $tempArray[date]=[];
        foreach ($allData as $key=>$array_data) {
            
            array_push($tempArray[from],$array_data[0][from]);
            array_push($tempArray[date],$array_data[2][date]);
        }

        //hacer unicos los valores para poder crear la matriz de la tabla
        $uniqueFromArray = array_values(array_unique($tempArray[from]));
        $uniqueDateArray = array_values(array_unique($tempArray[date]));
        $uniqueAllData[action];
        $uniqueAllData[date];
        $uniqueAllData[reactions];
        $formatedData;

        foreach ($allData as $key=>$array_data) {
            /* print("<pre>".print_r($array_data,true)."</pre>"); */
            $from=$array_data[0][from];
            $type=$array_data[1][type];
            $date=$array_data[2][date];
            $reactions=$array_data[3][reactions];
            /* switch (true) {
                case ($from==$uniqueFromArray[0] && in_array($date,$uniqueDateArray)):
                    # code...
                    $uniqueAllData[$key][action]=$type." from ".$from;
                    $uniqueAllData[$key][date]=$date;
                    $uniqueAllData[$key][reactions]=$reactions;
                    break;
                case ($from==$uniqueFromArray[1] && in_array($date,$uniqueDateArray)):
                    # code...
                    $uniqueAllData[$key][action]=$type." from ".$from;
                    $uniqueAllData[$key][date]=$date;
                    $uniqueAllData[$key][reactions]=$reactions;
                    break;
                case ($from==$uniqueFromArray[2] && in_array($date,$uniqueDateArray)):
                    # code...
                    $uniqueAllData[$key][action]=$type." from ".$from;
                    $uniqueAllData[$key][date]=$date;
                    $uniqueAllData[$key][reactions]=$reactions;
                    break;
                
                default:
                    # code...
                    break;
            } */

            foreach ($uniqueDateArray as $keyx => $date_value) {
                # code...
                if ($date == $date_value) {
                    # code...
                    foreach ($uniqueFromArray as $keyy => $from_value) {
                        switch (true) {
                            case ($from==$uniqueFromArray[0] && in_array($date,$uniqueDateArray)):
                                # code...
                                $uniqueAllData[$key][action]=$type." from ".$from;
                                $uniqueAllData[$key][date]=$date;
                                $uniqueAllData[$key][$from."-".reactions]=$reactions;
                                break;
                            case ($from==$uniqueFromArray[1] && in_array($date,$uniqueDateArray)):
                                # code...
                                $uniqueAllData[$key][action]=$type." from ".$from;
                                $uniqueAllData[$key][date]=$date;
                                $uniqueAllData[$key][$from."-".reactions]=$reactions;
                                break;
                            case ($from==$uniqueFromArray[2] && in_array($date,$uniqueDateArray)):
                                # code...
                                $uniqueAllData[$key][action]=$type." from ".$from;
                                $uniqueAllData[$key][date]=$date;
                                $uniqueAllData[$key][$from."-".reactions]=$reactions;
                                break;
                            
                            default:
                                # code...
                                break;
                        }
                    }
                }
            }
        }


        
        
        /*         
        print("<pre>".print_r($uniqueAllData,true)."</pre>");
        print("<pre>".print_r($arr3,true)."</pre>");
        print("<pre>".print_r($allData,true)."</pre>"); 
        print("<pre>".print_r($uniqueFromArray,true)."</pre>");
        print("<pre>".print_r($uniqueDateArray,true)."</pre>"); 
        print("<pre>".print_r($tempArray,true)."</pre>");
        */
        
        $uniqueAllData = [['action'=>'post from facebook','date'=>'Friday 7 Jun 2019 20:00','facebook-reactions'=>rand(10,99),'twitter-reactions'=>rand(10,99),'instagram-reactions'=>rand(10,99)],['action'=>'post from facebook','date'=>'Friday 7 Jun 2019 21:00','facebook-reactions'=>rand(10,99),'twitter-reactions'=>rand(10,99),'instagram-reactions'=>rand(10,99)],['action'=>'post from facebook','date'=>'Friday 8 Jun 2019 08:00','facebook-reactions'=>rand(10,99),'twitter-reactions'=>rand(10,99),'instagram-reactions'=>rand(10,99)],['action'=>'post from facebook','date'=>'Friday 8 Jun 2019 09:00','facebook-reactions'=>rand(10,99),'twitter-reactions'=>rand(10,99),'instagram-reactions'=>rand(10,99)]];

        // Render the Twig template templates/index.twig and assign the view variable answerToLife to the view.
        return $this->renderTemplate('index', ['allData'=>$uniqueAllData]);
    }

    public function getFacebookData(){
        //logica y credenciales del api de facebook
        /* necesario tener el page id y el token */
        /* PHP SDK v5.0.0 */
        /* make the API call */
       /*  try {
            // Returns a `Facebook\FacebookResponse` object
            $response = $fb->get(
            '/{page-id}/published_posts',
            '{access-token}'
            );
        } catch(Facebook\Exceptions\FacebookResponseException $e) {
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch(Facebook\Exceptions\FacebookSDKException $e) {
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }
        $graphNode = $response->getGraphNode(); */
        /* handle the result */

        //formatear datos al array que busco
        //$facebookdata=['action','date','reactions']['post','07-06-2019',rand(10,50)];
        $facebookdata=[];
        array_push($facebookdata,[['from'=>'facebook'],['type'=>'post'],['date'=>date('l j M Y H:i',strtotime('07-06-2019 20:00'))],['reactions'=>rand(10,99)]]);
        array_push($facebookdata,[['from'=>'facebook'],['type'=>'post'],['date'=>date('l j M Y H:i',strtotime('07-06-2019 21:00'))],['reactions'=>rand(10,99)]]);
        array_push($facebookdata,[['from'=>'facebook'],['type'=>'video'],['date'=>date('l j M Y H:i',strtotime('08-06-2019 08:00'))],['reactions'=>rand(10,99)]]);
        array_push($facebookdata,[['from'=>'facebook'],['type'=>'video'],['date'=>date('l j M Y H:i',strtotime('08-06-2019 09:00'))],['reactions'=>rand(10,99)]]);
        return $facebookdata;
    }

    public function getTwitterData(){
        //logica y credenciales del api de twitter

        //formatear datos al array que busco
        //$twitterdata=['action','date','reactions']['post','07-06-2019',rand(10,50)];
        $twitterdata=[];
        array_push($twitterdata,[['from'=>'twitter'],['type'=>'post'],['date'=>date('l j M Y H:i',strtotime('07-06-2019 20:00'))],['reactions'=>rand(10,99)]]);
        array_push($twitterdata,[['from'=>'twitter'],['type'=>'post'],['date'=>date('l j M Y H:i',strtotime('07-06-2019 21:00'))],['reactions'=>rand(10,99)]]);
        array_push($twitterdata,[['from'=>'twitter'],['type'=>'video'],['date'=>date('l j M Y H:i',strtotime('08-06-2019 08:00'))],['reactions'=>rand(10,99)]]);
        array_push($twitterdata,[['from'=>'twitter'],['type'=>'video'],['date'=>date('l j M Y H:i',strtotime('08-06-2019 09:00'))],['reactions'=>rand(10,99)]]);
        return $twitterdata;
        
    }

    public function getInstagramData(){
        //logica y credenciales del api de instagram

        //formatear datos al array que busco
        //$instagramdata=['action','date','reactions']['post','07-06-2019',rand(10,50)];
        $instagramdata=[];
        array_push($instagramdata,[['from'=>'instagram'],['type'=>'post'],['date'=>date('l j M Y H:i',strtotime('07-06-2019 20:00'))],['reactions'=>rand(10,99)]]);
        array_push($instagramdata,[['from'=>'instagram'],['type'=>'post'],['date'=>date('l j M Y H:i',strtotime('07-06-2019 21:00'))],['reactions'=>rand(10,99)]]);
        array_push($instagramdata,[['from'=>'instagram'],['type'=>'video'],['date'=>date('l j M Y H:i',strtotime('08-06-2019 08:00'))],['reactions'=>rand(10,99)]]);
        array_push($instagramdata,[['from'=>'instagram'],['type'=>'video'],['date'=>date('l j M Y H:i',strtotime('08-06-2019 09:00'))],['reactions'=>rand(10,99)]]);
        return $instagramdata;
        
    }
}
