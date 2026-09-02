<?php
/**
 * Configuração do site - Dr(a). Nome Sobrenome (Cirurgiã-Dentista)
 * Edite AQUI todos os dados e textos. O HTML (index.php) não precisa mudar.
 */
return [
  // ====== Identidade ======
  'name'    => 'Dr(a). Nome Sobrenome',
  'short'   => 'Dr(a). Nome Sobrenome',
  'tagline' => 'Cirurgiã-Dentista · Cidade Exemplo',
  'logo'    => 'img/logo.svg',

  // ====== Contato ======
  'phone'           => '(00) 00000-0000',
  'phone_raw'       => '+5500000000000',
  'whatsapp_numero' => '5500000000000',
  'whatsapp_msg'    => 'Olá, Dr(a). Nome Sobrenome! Vim pelo site e gostaria de agendar uma avaliação.',

  // ====== Endereço ======
  'address'    => 'Rua Exemplo, 000',
  'city'       => 'Cidade Exemplo',
  'state'   => 'UF',
  'maps_query' => 'Rua Exemplo, 000, Cidade Exemplo · UF',
  'geo_lat'    => 0,
  'geo_lng'    => 0,

  // ====== Avaliações ======
  'rating'     => '4,9',
  'rating_num' => 4.9,
  'reviews'    => 106,

  // ====== Horário ======
  'horario_semana' => 'Seg a Sex: 08h às 18h',
  'horario_sabado' => 'Sábado: 08h às 12h',

  // ====== Redes sociais ======
  'instagram' => '',

  // ====== SEO ======
  'seo_title' => 'Dr(a). Nome Sobrenome - Cirurgiã-Dentista em Cidade Exemplo',
  'seo_desc'  => 'Cirurgiã-dentista em Cidade Exemplo com nota 4,9 (106 avaliações). Implantes, facetas em porcelana, clareamento, ortodontia e odontologia estética. Agende pelo WhatsApp.',

  // ====== Hero ======
  'hero_titulo_1'  => 'Cuidando do seu sorriso',
  'hero_titulo_2'  => 'com excelência.',
  'hero_subtitulo' => 'Tratamentos odontológicos modernos, atendimento humanizado e foco na saúde e estética do seu sorriso.',

  // ====== Diferenciais (barra de destaque) ======
  'diferenciais' => [
    ['icon' => 'heart-handshake', 'title' => 'Atendimento Humanizado', 'desc' => 'Escuta atenta, explicação de cada etapa e acolhimento do início ao fim do tratamento.'],
    ['icon' => 'microscope',      'title' => 'Equipamentos Modernos',  'desc' => 'Tecnologia atual de diagnóstico para um tratamento mais preciso, rápido e seguro.'],
    ['icon' => 'sofa',            'title' => 'Ambiente Confortável',    'desc' => 'Estrutura pensada para reduzir a ansiedade desde a recepção até a cadeira.'],
    ['icon' => 'star',            'title' => 'Excelente Avaliação',     'desc' => 'Nota 4,9 com mais de 100 pacientes que recomendam o atendimento.'],
  ],

  // ====== Tratamentos ======
  'servicos' => [
    ['icon' => 'sparkles',   'title' => 'Limpeza',               'desc' => 'Profilaxia completa que remove placa e tártaro, prevenindo cáries e doenças gengivais.'],
    ['icon' => 'smile',      'title' => 'Clareamento Dental',    'desc' => 'Dentes visivelmente mais brancos com protocolo seguro e sem sensibilidade excessiva.'],
    ['icon' => 'anchor',     'title' => 'Implantes',             'desc' => 'Reposição de dentes com estética natural e mastigação totalmente recuperada.'],
    ['icon' => 'gem',        'title' => 'Facetas em Porcelana',  'desc' => 'Design de sorriso sob medida para harmonia, brilho e naturalidade do rosto.'],
    ['icon' => 'align-horizontal-distribute-center', 'title' => 'Ortodontia', 'desc' => 'Aparelhos convencionais, estéticos e alinhadores para um sorriso alinhado.'],
    ['icon' => 'layers',     'title' => 'Próteses',              'desc' => 'Próteses fixas e removíveis planejadas para conforto, função e naturalidade.'],
    ['icon' => 'stethoscope','title' => 'Tratamento de Canal',   'desc' => 'Endodontia com anestesia eficaz e alívio da dor, preservando o seu dente.'],
    ['icon' => 'scissors',   'title' => 'Extrações',             'desc' => 'Cirurgias seguras, incluindo sisos, com recuperação rápida e acompanhada.'],
    ['icon' => 'star',       'title' => 'Odontologia Estética',  'desc' => 'Procedimentos que valorizam o seu sorriso e a harmonia natural da face.'],
  ],

  // ====== Como funciona ======
  'passos' => [
    ['n' => '01', 'title' => 'Agende seu horário',    'desc' => 'Chame no WhatsApp e escolha o melhor dia e horário. Respondemos em poucos minutos.'],
    ['n' => '02', 'title' => 'Realize sua avaliação', 'desc' => 'Fazemos um diagnóstico cuidadoso e apresentamos o plano de tratamento com valores claros.'],
    ['n' => '03', 'title' => 'Inicie seu tratamento', 'desc' => 'Tratamento conduzido com técnica e acolhimento, com acompanhamento até o resultado final.'],
  ],

  // ====== Galeria (placeholders editáveis) ======
  'galeria' => [
    ['img' => 'img/galeria-consultorio.svg',  'alt' => 'Consultório odontológico da Dr(a). Nome Sobrenome'],
    ['img' => 'img/galeria-equipamentos.svg', 'alt' => 'Equipamentos odontológicos modernos'],
    ['img' => 'img/galeria-recepcao.svg',     'alt' => 'Recepção acolhedora do consultório'],
    ['img' => 'img/galeria-atendimento.svg',  'alt' => 'Atendimento humanizado ao paciente'],
    ['img' => 'img/galeria-sorriso-1.svg',    'alt' => 'Sorriso saudável após tratamento'],
    ['img' => 'img/galeria-sorriso-2.svg',    'alt' => 'Paciente sorrindo com confiança'],
  ],

  // ====== Depoimentos ======
  'depoimentos' => [
    ['name' => 'Juliana Menezes', 'role' => 'Clareamento e limpeza', 'initials' => 'JM', 'text' => 'Tinha muito medo de dentista e saí de lá tranquila. A Dr(a). Nome Sobrenome explicou cada passo e o resultado do clareamento ficou lindo e natural.'],
    ['name' => 'Ricardo Andrade', 'role' => 'Implante unitário',     'initials' => 'RA', 'text' => 'Perdi um dente da frente e achei que nunca mais sorriria igual. O implante ficou idêntico aos outros. Atendimento pontual e impecável.'],
    ['name' => 'Camila Torres',   'role' => 'Facetas em porcelana',  'initials' => 'CT', 'text' => 'As facetas mudaram completamente o meu sorriso. Ficou tudo muito natural e do jeito que eu sonhava. Recomendo de olhos fechados.'],
    ['name' => 'Marcos Vinícius', 'role' => 'Ortodontia',            'initials' => 'MV', 'text' => 'Profissional atenciosa e muito cuidadosa. Cada consulta foi no horário marcado e o orçamento nunca mudou do combinado.'],
    ['name' => 'Patrícia Lima',   'role' => 'Odontologia estética',  'initials' => 'PL', 'text' => 'Ambiente acolhedor e um atendimento humano de verdade. Me senti segura em todas as etapas do tratamento. Virei paciente fiel.'],
    ['name' => 'André Santos',    'role' => 'Tratamento de canal',   'initials' => 'AS', 'text' => 'Cheguei com muita dor e saí aliviado no mesmo dia. Trabalho delicado, sem dor e com muita paciência para explicar tudo.'],
  ],

  // ====== Sobre a profissional ======
  'sobre_titulo' => 'Compromisso, ética e cuidado com cada sorriso',
  'sobre_p1' => 'A Dr(a). Nome Sobrenome une técnica apurada e um atendimento verdadeiramente humanizado. Cada paciente é ouvido com atenção e recebe um plano de tratamento individualizado - nada de procedimentos desnecessários, apenas o que faz sentido para a sua saúde e o seu sorriso.',
  'sobre_p2' => 'Com foco em qualidade, ética e aperfeiçoamento constante, o consultório investe em tecnologia moderna e em protocolos de segurança em todas as etapas. O resultado é uma experiência confortável, transparente e com acompanhamento do começo ao fim.',
  'sobre_stats' => [
    ['v' => '4,9★', 'l' => 'nota dos pacientes'],
    ['v' => '106',  'l' => 'avaliações positivas'],
    ['v' => '100%', 'l' => 'atendimento personalizado'],
  ],

  // ====== CTA final ======
  'cta_titulo' => 'Seu sorriso merece um atendimento de excelência.',
  'cta_sub'    => 'Agende sua avaliação e dê o primeiro passo para um sorriso mais saudável e bonito.',
];
