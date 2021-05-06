<?php

// override core en language system validation or define your own en language validation message
return [
  'share_desc' => '',
  'share_title' => '',
  'share_description' => '',
  'share_image' => '',

  'done'=> 'Done',
  'correct'=> 'correct',
  'try_again'=> 'try again',
  'btn_share' => 'Share',

  'nav' => [
    'home' => 'Home',
    'aboutus' => 'About Us',
    'gallery' => 'Gallery',
    'contactus' => 'Contact Us',
  ],

  'subnav' => [
    'pocket_fact' => 'Pocket Fact',
    'virus_hunter' => 'Virus Hunter Icon',
    'career_pathway' => 'Career Pathway',
    'us_anecdotes' => 'US Anecdotes',
    'try_out' => 'Try This'
  ],

  'home' => [
    'imready' => 'i\'m ready',
    'aprojectby' => 'A project by',
    'supportedby' => 'Supported by',
  ],
  'overview' => [
    'letsbegin' => 'MARI MULAKAN!',
    'continue' => 'continue',
    'joingina' => 'Sertai Gina dan Ilyas dalam usaha mereka untuk menjadi seorang <span class="text-white">Virus Hunter</span><span>!</span>',
    'pickupfacts' => 'Dapatkan fakta pantas sambil belajar mengenai virus, pandemik dan vaksin di dunia sebenar.',
    'bubble_instruction' => 'Lengkapkan aktiviti-aktiviti untuk mengumpul bintang dan memperoleh pingat Virus Hunter!'
  ],

  'aboutus' => [
    'title' => 'About Us',
    'desc' => 'Virus Hunter is a project organized by Penang Science Cluster and supported by US Embassy and American Tech Corner Penang.<br><br>Our goal is to edicate students about viruses, pandemics abd vaccines.<br><br>
    We also hope to expose students to study and career pathways in life sciences!',
    'organizedby' => 'Organized By',
  ],

  'contactus' => [
    'title' => 'Contact Us',
    'desc' => 'Join STEM activities by Penang Science Cluster <br>- available both virtually and in person at:',
    'visit_enquiry' => 'Visit us <a href="{0}" target="_blank">here</a> for enquiries!'
  ],

  'gallery' => [
    'title' => 'Gallery',
    'tabs' => [
      'View Photos',
      'Watch Videos',
      'Downloads'
    ]
  ],

  'disease' => 'Disease',
  'pathogen' => 'Pathogen',
  'transmission' => 'Transmission',

  'pandemics' => [
    'dialog' => [
      'girl' => 'In early 2020, my classmates and I had to suddenly attend school from home. It is the same for you too, isn’t it, Ilyas?',
      'boy' => 'Yes! My mother told me that there was a pandemic and we had to take care of each other by staying at home.'
    ],
    "popup" => [
      'pocket_fact' =>  'Pandemics are sudden disease outbreaks that spread to a large number of people across multiple countries.',
      'career' =>  'Epidemiologists investigate disease outbreaks and potential threats, including their causes and transmission.',
      'us_anecdotes' =>  '...',
      'virus_hunter' =>  'Bill Gates heads a global plan to eradicate Malaria using engineered mosquitoes and prevent future outbreaks.',
    ],
    'spotlight' => [
      'btn' => 'Discover Outbreaks',
      'title' => 'Discover Outbreaks<br>in History',
    ]
  ],

  'zoonotic' => [
    'dialog' => [
      'girl' => 'That is true! I try to bring a hand sanitizer with me when I have to go outside. Did you know that COVID-19 is a zoonotic disease?',
      'boy' => 'We can prevent the spread of COVID-19 by washing our hands and avoiding crowded places.'
    ],
    "popup" => [
      'pocket_fact' =>  'Zoonotic diseases are transmitted from animals to humans either directly or indirectly through water, food or environment.',
      'career' =>  'As animal trafficking is one of the factors driving the emergence of zoonotic disease, conservation biologists play an important role in preventing future outbreak.',
      'try_out' => [
        'title'=> 'Select ALL factors that contribute to emergence of zoonotic diseases.',
        'items' => [
          [
            'id'=>1,
            'src'=>'/img/zoonotic/zoonotic-try-01-bm.png',
          ],
          [
            'id'=> 2,
            'src'=>'/img/zoonotic/zoonotic-try-02-bm.png',
          ],
          [
            'id' => 3,
            'src'=>'/img/zoonotic/zoonotic-try-03-bm.png'
          ],
          [
            'id' => 4,
            'src'=>'/img/zoonotic/zoonotic-try-04-bm.png'
          ],
          [
            'id' => 5,
            'src'=>'/img/zoonotic/zoonotic-try-05-bm.png'
          ]
        ]
      ]
    ],
    'spotlight' => [
      'btn' => 'Discover Transmission of Disease',
      'title' => 'Transmission of Disease<br>from Animals to Humans',
      'contentImg' => '/img/zoonotic/content_bm.png'
    ]
  ],

  'nipah' => [
    'dialog' => [
      'girl' => 'My elder brother mentioned another disease outbreak that happened here in Malaysia before we were born. Did you hear about it as well?',
      'boy' => 'Yes! My mother told me about the Nipah Virus outbreak in Peninsular Malaysia.'
    ],
    "popup" => [
      'pocket_fact' =>  'During the outbreak in 1998, experts led communications on progress of the outbreak to encourage best health practice by health workers as well as the community.',
      'career' =>  'Biochemists study chemical reactions in living things, including how virus takes over control of infected cells!',
      'virus_hunter' => 'Kaw Bing Chua was a virology student when he discovered Nipah virus, leading to the eventual control of the outbreak',
      'try_out' => [
        'title'=> 'Drag and drop the correct name and function of the virus structure to the label.',
        'items' => [
          [
            'id' => 1,
            'title' => 'genetic material ',
            'desc' => 'stores information for the virus to function and construct itself (may be in the form of DNA or RNA!)',
          ],
          [
            'id' => 2,
            'title' => 'viral envelope',
            'desc' => 'protects genetic material (sometimes not present in a virus)',
          ],
          [
            'id' => 3,
            'title' => 'glycoprotein',
            'desc' => 'helps the virus attach & infect cells',
          ]
        ]
      ]
    ],
    'spotlight' => [
      'btn' => 'Discover Virus Structure',
      'title' => 'Virus Structure',
      'contentImg' => '/img/nipah/content_bm.png'
    ]
  ],

  'covid' => [
    'dialog' => [
      'girl' => 'We have to wear face masks because COVID-19 is spread through respiratory droplets. This is especially important because many COVID-19 patients do not show any symptoms!',
      'boy' => 'During the pandemic, we have to wear face masks when we are outside and meeting other people. Why is it so important for us to wear face masks, Gina?'
    ],
    "popup" => [
      'pocket_fact' =>  'Symptoms of COVID-19 include fever, shortness of breath and loss of taste and smell.',
      'us_anecdotes' =>  'Operation Warp Speed in the US strives to accelerate the development, manufacturing and distribution of COVID-19 vaccines, therapeutics and diagnostics.',
      'virus_hunter' => 'Noor Hisham Abdullah, is recognized for managing the team handling COVID-19 pandemic in Malaysia.',
    ],
    'spotlight' => [
      'btn' => 'Watch<br>Video',
      'title' => 'Prevent the Spread of Disease',
      'desc' => 'With or without a pandemic, we should always do our part to protect ourselves and others around us from getting sick. Watch this video on how to prevent the spread of disease when we cough and sneeze!',
    ]
  ],

  'vaccines' => [
    'dialog' => [
      'girl' => 'As vaccines are now being distributed all over the world, there is hope that we can put an end to the pandemic as we gain immunity to the virus.',
      'boy' => 'Yes! We must continue to wear face marks, wash our hands and practice social distancing to slow down the spread of COVID-19 until our whole community is vaccinated.'
    ],
    "popup" => [
      'pocket_fact' =>  'A vaccine is a substance that stimulates the body to build active immunity against a virus, effectively protecting the body from the disease it causes.',
      'virus_hunter' => 'Baruch Blumberg discovered the molecule responsible for hepatitis B immune response, leading to the successful production of hepatitis B vaccine.',
      'try_out' => [
        'title'=> 'Drag and drop the description to the correct phase.',
        'items' => [
          [
            'id' => 1,
            'src'=>'/img/vaccines/vaccines-try-step1-bm.png',
            'step' => 'Praklinikal'
          ],
          [
            'id' => 2,
            'src'=>'/img/vaccines/vaccines-try-step2-bm.png',
            'step' => 'Fasa I'
          ],
          [
            'id' => 3,
            'src'=>'/img/vaccines/vaccines-try-step3-bm.png',
            'step' => 'Fasa II'
          ],
          [
            'id' => 4,
            'src'=>'/img/vaccines/vaccines-try-step4-bm.png',
            'step' => 'Fasa III'
          ],
          [
            'id' => 5,
            'src'=>'/img/vaccines/vaccines-try-step5-bm.png',
            'step' => 'Kelulusan'
          ]
        ]
      ]
    ],
    'spotlight' => [
      'btn' => 'Vaccine Development Process',
      'title' => 'Vaccine Development Process',
      'contentImg' => '/img/vaccines/content_bm.png'
    ],
  ],

  'toolsandtechniques' => [
    'dialog' => [
      'girl' => 'Me too! This is the result of years of training, research and preparation long before the pandemic happened.',
      'boy' => 'I admire our health workers and experts for repsonding so quickly to the outbreak and taking care of us to the best of their ability.'
    ],
    "popup" => [
      'pocket_fact' =>  'RT-PCR is currently used globally to detect COVID-19 infection.',
      'us_anecdotes' =>  'PREDICT is a global program funded by USAID to study new and emerging zoonotic viruses and diseases, especially in Africa and Asia',
      'try_out' => [
        'title'=> 'Drag and drop to arrange the steps of COVID-19 testing based on the correct sequences.',
        'items' => [
          [
            'id'=>1,
            'src'=>'/img/toolsandtechniques/step1_bm.png',
          ],
          [
            'id'=> 2,
            'src'=>'/img/toolsandtechniques/step2_bm.png',
          ],
          [
            'id' => 3,
            'src'=>'/img/toolsandtechniques/step3_bm.png'
          ]
        ]
      ]
    ],
    'spotlight' => [
      'btn' => 'Discover COVID-19 Testing',
      'title' => 'COVID-19 Testing',
      'contentImg' => '/img/toolsandtechniques/content_bm.png'
    ]
  ],

  'completed'=>[
    'title'=> 'Well done on completing the challenges!',
    'desc'=> 'Claim your medal of honor, Virus Hunter!',
    'join'=>'Join our STEM activities <br>- available both virtually and in person at:',
    'dialog'=>[
      '<br>Learn more about the Virus Hunter project <a href="{0}">here</a>.',
      'Find out about the role of US in accelerating growth in public healthcare globally <a href="{0}">here</a>.',
      'Read more about how to protect yourself and your family and friend from different diseases <a href="{0}">here</a>.'
    ]
  ]

];