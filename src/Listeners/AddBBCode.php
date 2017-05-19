<?php
namespace oe800\BBCodeFontizymo\Listeners;
use Flarum\Event\ConfigureFormatter;
use Illuminate\Contracts\Events\Dispatcher;
class AddBBCode
{
    public function subscribe(Dispatcher $events)
    {
        $events->listen(ConfigureFormatter::class, [$this, 'addBBCode']);
    }
    public function addBBCode(ConfigureFormatter $event)
    {


	 $event->configurator->BBCodes->addCustom(
 '[aclonica]{TEXT}[/aclonica]',
            '<p class="aclonica">{TEXT}</p>'
        );


$event->configurator->BBCodes->addCustom(
 '[aldrich]{TEXT}[/aldrich]',
            '<p class="aldrich">{TEXT}</p>'
        );

$event->configurator->BBCodes->addCustom(
 '[anonymouspro]{TEXT}[/anonymouspro]',
            '<p class="anonymouspro">{TEXT}</p>'
        );

$event->configurator->BBCodes->addCustom(
 '[bowlbyone]{TEXT}[/bowlbyone]',
            '<p class="bowlbyone">{TEXT}</p>'
        );

$event->configurator->BBCodes->addCustom(
 '[cagliostro]{TEXT}[/cagliostro]',
            '<p class="cagliostro">{TEXT}</p>'
        );

$event->configurator->BBCodes->addCustom(
 '[opensans]{TEXT}[/opensans]',
            '<p class="opensans">{TEXT}</p>'
        );

$event->configurator->BBCodes->addCustom(
 '[orbitron]{TEXT}[/orbitron]',
            '<p class="orbitron">{TEXT}</p>'
        );

$event->configurator->BBCodes->addCustom(
 '[oswald]{TEXT}[/oswald]',
            '<p class="oswald">{TEXT}</p>'
        );

$event->configurator->BBCodes->addCustom(
 '[philosopher]{TEXT}[/philosopher]',
            '<p class="philosopher">{TEXT}</p>'
        );

$event->configurator->BBCodes->addCustom(
 '[quattrocentosans]{TEXT}[/quattrocentosans]',
            '<p class="quattrocentosans">{TEXT}</p>'
        );

$event->configurator->BBCodes->addCustom(
 '[quicksand]{TEXT}[/quicksand]',
            '<p class="quicksand">{TEXT}</p>'
        );

$event->configurator->BBCodes->addCustom(
 '[SATISFY]{TEXT}[/SATISFY]',
            '<p class="satisfy">{TEXT}</p>'
        );

$event->configurator->BBCodes->addCustom(
 '[syncopate]{TEXT}[/syncopate]',
            '<p class="syncopate">{TEXT}</p>'
        );

$event->configurator->BBCodes->addCustom(
 '[ubuntumono]{TEXT}[/ubuntumono]',
            '<p class="ubuntumono">{TEXT}</p>'
        );

$event->configurator->BBCodes->addCustom(
 '[voltaire]{TEXT}[/voltaire]',
            '<p class="voltaire">{TEXT}</p>'
        );




$event->configurator->BBCodes->addCustom(
 '[roboto]{TEXT}[/roboto]',
            '<p class="roboto">{TEXT}</p>'
        );

$event->configurator->BBCodes->addCustom(
 '[robotoslab]{TEXT}[/robotoslab]',
            '<p class="robotoslab">{TEXT}</p>'
        );

$event->configurator->BBCodes->addCustom(
 '[khula]{TEXT}[/khula]',
            '<p class="khula">{TEXT}</p>'
        );

$event->configurator->BBCodes->addCustom(
 '[barrio]{TEXT}[/barrio]',
            '<p class="barrio">{TEXT}</p>'
        );

$event->configurator->BBCodes->addCustom(
 '[montserratsubrayada]{TEXT}[/montserratsubrayada]',
            '<p class="montserratsubrayada">{TEXT}</p>'
        );

$event->configurator->BBCodes->addCustom(
 '[raleway]{TEXT}[/raleway]',
            '<p class="raleway">{TEXT}</p>'
        );

$event->configurator->BBCodes->addCustom(
 '[raviprakash]{TEXT}[/raviprakash]',
            '<p class="raviprakash">{TEXT}</p>'
        );

$event->configurator->BBCodes->addCustom(
 '[lora]{TEXT}[/lora]',
            '<p class="lora">{TEXT}</p>'
        );

$event->configurator->BBCodes->addCustom(
 '[droidsans]{TEXT}[/droidsans]',
            '<p class="droidsans">{TEXT}</p>'
        );

$event->configurator->BBCodes->addCustom(
 '[ubuntu]{TEXT}[/ubuntu]',
            '<p class="ubuntu">{TEXT}</p>'
        );

$event->configurator->BBCodes->addCustom(
 '[droidserif]{TEXT}[/droidserif]',
            '<p class="droidserif">{TEXT}</p>'
        );

$event->configurator->BBCodes->addCustom(
 '[baloo]{TEXT}[/baloo]',
            '<p class="baloo">{TEXT}</p>'
        );

$event->configurator->BBCodes->addCustom(
 '[ptserif]{TEXT}[/ptserif]',
            '<p class="ptserif">{TEXT}</p>'
        );

$event->configurator->BBCodes->addCustom(
 '[indieflower]{TEXT}[/indieflower]',
            '<p class="indieflower">{TEXT}</p>'
        );

$event->configurator->BBCodes->addCustom(
 '[dosis]{TEXT}[/dosis]',
            '<p class="dosis">{TEXT}</p>'
        );

$event->configurator->BBCodes->addCustom(
 '[oxygen]{TEXT}[/oxygen]',
            '<p class="oxygen">{TEXT}</p>'
        );

$event->configurator->BBCodes->addCustom(
 '[anton]{TEXT}[/anton]',
            '<p class="anton">{TEXT}</p>'
        );

$event->configurator->BBCodes->addCustom(
 '[cabin]{TEXT}[/cabin]',
            '<p class="cabin">{TEXT}</p>'
        );

$event->configurator->BBCodes->addCustom(
 '[arvo]{TEXT}[/arvo]',
            '<p class="arvo">{TEXT}</p>'
        );

$event->configurator->BBCodes->addCustom(
 '[lobster]{TEXT}[/lobster]',
            '<p class="lobster">{TEXT}</p>'
        );

$event->configurator->BBCodes->addCustom(
 '[pacifico]{TEXT}[/pacifico]',
            '<p class="pacifico">{TEXT}</p>'
        );


    }
}
