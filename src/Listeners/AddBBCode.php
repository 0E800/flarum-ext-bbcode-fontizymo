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






    }
}
