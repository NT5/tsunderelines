<?php

namespace NT5\TsundereLines;

class TsundereLines {

    /**
     *
     * @var array
     */
    private static $messages = [
        'Hmp! no quiero hablar contigo',
        '¡No es lo que parece! ¡No me malinterpretes! No es como si quisiera hacerlo o algo así',
        '¡No tenia nada mas que hacer! no es por que yo quería',
        '¡Tómalo si quieres si no déjalo!  p-pero no es como si yo me haya preocupado tanto por darte algo',
        '¡Silencio! ¡idiota! ¡perro estúpido!',
        '¡Idiota! ¡Idiota!¡idiota!',
        '¿Eres estúpido?',
        'Es mejor que estar agradecidos',
        'Y-yo nunca me enamorare, eso es solo para tontos',
        'Yo puedo hacerlo sola, no necesito ayuda.',
        '¡Yo podría haberlo hecho sola! nadie te pidió tu ayuda',
        'Hice demás, a-asi que t-tomalas si quieres',
        'Eres un vago, no te estoy ayudando pero aun así mas vale me agradezcas',
        '¡Te odio!',
        '¡Eres un tonto, muérete!',
        '¡Cuanto tiempo estarás durmiendo! ¡levántate de una vez o te saco a patadas!',
        '¡No hagas que te pegue! ¡ me asegurare que te duela!',
        '¡No quiero ver tu cara! ¡No me hables, idiota! estas muchos años mas para hablar conmigo',
        'Idiota, ¿por quien me tomas?',
        'N-no me mires así',
        '¡No es por que quiera! pero, Y-ya que insistes...',
        'N-no me preocupo n-ni nada',
        '¡Eres desesperante! Te perdono pero solo por esta vez',
        'Y-yo...¡no estoy nerviosa ni nada! d-digo ¡no es como si me gustaras!',
        '¡No te confundas! no lo hice por ti, es solo que...',
        '¡No lo volvere a decir! ¡si no escuchas no te lo repitire! quedas advertido...y-yo...etto...¡Me gustas! l-listo lo dije, ¿contento?',
        '¡No puedo dejar que otras le pongan sus manos en mi esclavo!',
        'p-puede que me g-gustes un poquito...¡pero no te hagas ilusiones, pervertido!',
        '¡H-hey! si te fijas en otra c-chica considérate muerto, idiota',
        '¡T-tu! ¡Bakka! ¡¿ e-estabas mirando e-e-el cuerpo de o-otra, cierto?!',
        'Q-quizás no tenga el m-mejor cuerpo, pero..pero ...e-eres un pervertido!',
        '¡Lo diré solo una vez y directamente, idiota! ¡N-no quiero que m-mires a otra! quiero ser la única cercana a ti ¡¿Entendiste, tonto?! t-te quiero...d-digo...',
        'Urusai baka!! n-no me vuelvas hablar nunca mas! e-eres horrible....E-espera...no te vayas, q-quiero que...e-estes conmigo',
        'N-no me gustas tanto como tu c-crees...p-pero me gustas mas como y-yo creía',
        'N-no soy tsundere, idiota'
    ];

    /**
     * 
     * @return string
     */
    public static function pick() {
        return self::$messages[array_rand(self::$messages)];
    }

}
