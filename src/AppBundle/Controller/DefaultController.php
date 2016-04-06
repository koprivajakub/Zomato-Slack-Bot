<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Attachment;
use AppBundle\Entity\Field;
use AppBundle\Entity\Response;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Date;

class DefaultController extends Controller
{
    /**
     * @Rest\Post(path="/")
     * @Rest\View()
     */
    public function indexAction(Request $request)
    {
        $response = new Response();
        $response->setText('Dnes je '.date('l').'.');
        $hospodaNo1 = new Attachment();

        $jidlo1 = new Field();
        $jidlo1->setTitle('Žrádlo1');
        $jidlo1->setValue('Cena 123 Kč');
        $hospodaNo1->addField($jidlo1);

        $hospodaNo1->setColor('#FF00FF');
        $hospodaNo1->setFallback('Název hospody');
        $hospodaNo1->setText("Název hospody\n_______________________________________________________________________________________________");

        $response->addAttachment($hospodaNo1);

        return $response;
    }
}

//{
//"attachments": [
//        {
//            "fallback": "Žrádelna 1",
//            "text": ":poultry_leg: :hamburger: :pizza: Žrádelna 1 :pizza: :hamburger: :poultry_leg:\n _______________________________________________________________________________________________",
//            "fields": [
//                {
//                    "title": "Žrádlo č.1",
//                    "value": "123 Kč",
//                    "short": false
//                },
//                {
//                    "title": "Žrádlo č.2",
//                    "value": "123 Kč",
//                    "short": false
//                },
//                {
//                    "title": "Žrádlo č.3",
//                    "value": "123 Kč",
//                    "short": false
//                }
//            ],
//            "color": "#F35A00"
//        },
//		{
//            "fallback": "Žrádelna 3",
//            "text": ":poultry_leg: :hamburger: :pizza: Žrádelna 1 :pizza: :hamburger: :poultry_leg:\n _______________________________________________________________________________________________",
//            "fields": [
//                {
//                    "title": "Žrádlo č.1",
//                    "value": "123 Kč",
//                    "short": false
//                },
//                {
//                    "title": "Žrádlo č.2",
//                    "value": "123 Kč",
//                    "short": false
//                },
//                {
//                    "title": "Žrádlo č.3",
//                    "value": "123 Kč",
//                    "short": false
//                }
//            ],
//            "color": "#FF5AFF"
//        }
//    ]
//}
