<?php 
// $faqs = [
//   [
//     'question' => '¿Necesito una visa para viajar a Colombia?',
//     'answer' => 'Los ciudadanos de los Estados Unidos, Canadá, y varios países más, no requieren visa de turista para viajar a Colombia si la estancia es de menos de 90 días. Necesitas un pasaporte vigente por al menos seis meses después de la fecha de tu regreso. Si tu pasaporte vence antes del 15 de febrero de 2025, debes renovarlo antes de viajar. Renueva tu pasaporte con suficiente anticipación ya que puede demorar semanas en obtenerse.',
//   ],
//   [
//     'question' => '¿Hay algún requisito de vacunación especial para viajar a Colombia?',
//     'answer' => 'No hay requisitos de vacunación para los ciudadanos de USA que viajan a Colombia. Si viajas desde Brasil, debes tener el Certificado Internacional de Vacunación o Profilaxis (CIVP) para demostrar que has sido vacunado contra la fiebre amarilla.',
//   ],
//   [
//     'question' => '¿Existe algun protocolo especial para viajar a Colombia?',
//     'answer' => 'Si. Debes llenar el formulario Check-Mig 24 horas antes de tu salida y antes de hacer un check-in en línea. <br> Check-Mig es un formulario obligatorio que debe ser completado por los viajeros que ingresan o salen de Colombia. Se utiliza para agilizar los procedimientos de inmigración y garantizar que se sigan los protocolos de salud y seguridad. NO necesitas pagar por este formulario. Es gratuito y se debe llenar en línea. Por favor, sigue este enlace para completar el formulario: <a href="https://apps.migracioncolombia.gov.co/pre-registro">https://apps.migracioncolombia.gov.co/pre-registro</a>',
//   ],
//   [
//     'question' => '¿Cuál es el código de vestimenta para la boda?',
//     'answer' => 'El código de vestimenta es de Etiqueta. Las mujeres deben usar vestidos largo elegante y evitar usar los colores blanco o marfil. Los hombres deben usar Tuxido, de saco con corbatín negro.',
//   ],
//   [
//     'question' => '¿Cómo estará el clima en Cartagena en esta época del año?',
//     'answer' => 'Cartagena siempre es cálida y húmeda, con temperaturas típicamente entre 80-90°F (27-32°C). Marzo no es una temporada de lluvias intensas, pero son comunes las lluvias tropicales ocasionales. ¡Prepárate para el clima caluroso!',
//   ],
//   [
//     'question' => '¿Son bienvenidos los niños en la boda? Puedo llevar a mi propia niñera?',
//     'answer' => 'Sí, los niños son bienvenidos.',
//   ],
//   [
//     'question' => '¿La ceremonia y la recepción serán en espacios cerrados o al aire libre?',
//     'answer' => 'La ceremonia será dentro de la Iglesia Santo Toribio de Mogrovejo y la recepción será al interior del Centro de Convenciones de Cartagena. ',
//   ],
//   [
//     'question' => '¿Se permite fumar en la boda?',
//     'answer' => 'Habrá una zona designada para fumar en la terraza durante la recepción, lejos del área principal de actividades para proteger a los que no fuman y a los niños de los humos.',
//   ],
//   [
//     'question' => '¿A qué hora debo llegar a la ceremonia?',
//     'answer' => 'Por favor, llega a las 4:30 PM. La ceremonia comienza a las 5PM en punto y queremos que te prepares para llegar a tiempo y no interrumpir la entrada de la novia.',
//   ],
//   [
//     'question' => '¿Cuál es la fecha límite para confirmar la asistencia (RSVP) para la boda?',
//     'answer' => 'Por favor, confirma tu asistencia a los eventos en línea antes del 20 de Enero, 2025.',
//   ],
//   [
//     'question' => '¿Tienen un registro de regalos para la boda?',
//     'answer' => 'Nuestro mejor regalo es tu compañía! <br> Si desean tener un detalle con nosotros, hemos incluido la información del email para que sus obsequios puedan ser a través de la cuenta Zelle: catalfobombace@gmail.com',
//   ],
//   [
//     'question' => '¿Qué pasa si tengo una restricción alimenticia?',
//     'answer' => 'Por favor informarnos sobre cualquier restricción alimenticia cuando confirmes tu asistencia (RSVP) para asegurar tu comodidad y seguridad.',
//   ],
//   [
//     'question' => '¿Si no soy ciudadano o residente colombiano, ¿debo pagar el impuesto IVA del 19%?',
//     'answer' => 'Si no eres ciudadano o residente colombiano, no tienes que pagar el impuesto IVA del 19%. Si pagas algún impuesto, pide una copia electronica de tu compra cual debe llevar tu nombre completo y numero de pasaporte. Guarda el recibo y podras recibir un reembolso en el punto designado del aeropuerto para la devolución de impuestos. El reembolso en Cartagena se puede obtener en el módulo de IVA junto a la entrada de salidas internacionales.',
//   ],
//   [
//     'question' => '¿Qué opciones de transporte están disponibles para los invitados?',
//     'answer' => 'Para el día de la boda tenemos transporte que llevará a los invitados de la iglesia Santo Toribio de Mogrovejo a la recepción que se ofrecerá en el Centro de convenciones.  <br> Para su estancia en Cartagena, recomendamos usar Uber ya que es una opción muy rápida, segura, y confiable en Cartagena. Los taxis también están ampliamente disponibles y son convenientes, pero es mejor usar taxis oficiales y confirmar la tarifa con el conductor de antemano. Puedes usar la aplicación de Uber para comparar precios. Los viajes locales suelen costar entre $3 y $5 USD. <br> Tu hotel o nuestra wedding planner también pueden ayudarte a organizar transporte privado si lo prefieres.',
//   ],
//   [
//     'question' => '¿Cuál es la mejor manera de comunicarse con los demás si viajo desde el extranjero a Cartagena?',
//     'answer' => 'Las opciones incluyen planes telefónicos internacionales, comprar una tarjeta SIM local o usar aplicaciones como WhatsApp para comunicarse.',
//   ],
//   [
//     'question' => '¿Qué debo esperar al llegar al aeropuerto en Colombia?',
//     'answer' => 'Al llegar, sigue las señales para inmigración y aduanas. Ten tu pasaporte y cualquier formulario requerido listo. Las opciones de transporte hacia tu alojamiento estarán disponibles en el aeropuerto. Recomendamos descargar la aplicación de Uber ya que te permite pagar con tarjeta de credito. Los taxis solo aceptan efectivo. Infórmale a nuestro equipo de planeación si deseas organizar tu transporte con anticipación.',
//   ],
//   [
//     'question' => '¿Con quién puedo comunicarme si tengo questions adicionales sobre la boda?',
//     'answer' => 'Nuestro equipo de planeación, Mary Cueter Bodas & Eventos, está aquí para asistirte con cualquier question, consulta o consejo con tus planes! Contacto:  +57 321 849 2726 por teléfono/WhatsApp o por correo electrónico: <a style="color: inherit;" href="mailto:rsvp@catalfobombacewedding.com">rsvp@catalfobombacewedding.com </a> <br> ¡No dudes en contactarlas para cualquier asistencia que necesites!',
//   ]
// ]

$faqs = [
  [
    'question' => '¿Tenemos código de descuento en algún hospedaje?',
    'answer' => 'Si, contamos con un código de descuento en el hotel intercontinental: <a href="https://book.passkey.com/event/50918410/owner/14542424/home" target="_blank">https://book.passkey.com/event/50918410/owner/14542424/home</a>',
  ],
  [
    'question' => '¿Cómo estara el clima en Cartagena en esta época del año?',
    'answer' => 'Cartagena siempre es cálida y húmeda, con temperaturas típicamente entre 80-90°F (27-32°C). Marzo no es una temporada de lluvias intensas, pero son comunes las lluvias tropicales ocasionales. ¡Prepárate para el clima caluroso!',
  ],
  [
    'question' => '¿SON BIENVENIDOS LOS NIÑOS EN LA BODA?',
    'answer' => 'SÍ, LOS NIÑOS SON BIENVENIDOS. POR FAVOR DÉJANOS SABER EN TU RESERVA SI VIENES CON UN NIÑO',
  ],
  [
    'question' => '¿La ceremonia y la recepción serán en espacios cerrados o al aire libre?',
    'answer' => 'La ceremonia será dentro de la Iglesia Santo Toribio de Mogrovejo y la recepción será al interior del Centro de Convenciones de Cartagena.',
  ],
  [
    'question' => '¿Cuál es la fecha límite para confirmar la asistencia (RSVP) para la boda?',
    'answer' => 'Por favor, confirma tu asistencia a los eventos en línea antes del 20 de Enero, 2025',
  ],
  [
    'question' => '¿Qué pasa si tengo una restricción alimenticia?',
    'answer' => 'Por favor informarnos sobre cualquier restricción alimenticia cuando confirmes tu asistencia (RSVP) para asegurar tu comodidad y seguridad.',
  ],
  [
    'question' => '¿Qué opciones de transporte están disponibles para los invitados?',
    'answer' => 'Para el día de la boda tenemos transporte que llevará a los invitados de la iglesia Santo Toribio de Mogrovejo a la recepción que se ofrecerá en el Centro de convenciones. <br> recomendamos usar Uber ya que es una opción muy rápida, segura, y confiable en Cartagena.',
  ],
  [
    'question' => '¿Con quién puedo comunicarme si tengo preguntas adicionales sobre la boda?',
    'answer' => 'Nuestro equipo de planeación, Mary Cueter Bodas & Eventos, está aquí para asistirte con cualquier pregunta, consulta o consejo con tus planes! Contacto: +57 321 849 2726 por teléfono/WhatsApp o por correo electrónico: <a href="rsvp@catalfobombacewedding.com" target="_blank">rsvp@catalfobombacewedding.com</a> ¡No dudes en contactarlas para cualquier asistencia que necesites!',
  ],
]
?>

<section class='section9'>
  <div class='section9__bckg-fixed'></div>
  <div class='box text-center'>
      <div class='section9__faqs' id='faqs'>
          <p class='heading--24'>F.A.Q.S</p>
          <span class="space space--20"></span>
          <h2 class='heading--76 text--center'>Preguntas Frecuentes</h2>
          <span class="space space--20"></span>
          <span class="space space--20"></span>
          <?php foreach ($faqs as $key => $faq) { $key++ ?>
              <div>
                <button type='button' class='accordion-link' data-tab='question<?php echo $key; ?>'><?php echo $key ?>. 
                  <?php echo $faq['question']; ?>
                  <?php 
                    $icon_name = 'icon-arrow';
                    get_template_part('template-parts/content', 'icono');
                    display_icon($icon_name); 
                  ?>
                </button>
                <div class='accordion-content' id='question<?php echo $key; ?>'>
                  <p><?php echo $faq['answer']; ?></p>
                </div>
              </div>
          <?php } ?>
      </div>

      <div class="space space--54"></div>
      <p class="heading--18 color--959595">Más Información</p>
      <p class="heading--18 color--959595">+57 321 849 2726 rsvp@catalfobombacewedding.com</p>
  </div>
</section>
<p class="section8__footer">
  #catalfobombacewedding
</p>