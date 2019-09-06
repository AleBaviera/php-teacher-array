    <!DOCTYPE html>
    <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>nuova prova PHP</title>
      <style>
        .teacher{
          background-color: gray;
        }
        .pm{
          background-color: green;
        }
      </style>


        <?php
        $db = [
          'teachers' => [
              [
                  'name' => 'Michele',
                  'lastname' => 'Papagni'
              ],
              [
                  'name' => 'Fabio',
                  'lastname' => 'Forghieri'
              ]
          ],
          'pm' => [
              [
                  'name' => 'Roberto',
                  'lastname' => 'Marazzini'
              ],
              [
                  'name' => 'Federico',
                  'lastname' => 'Pellegrini'
              ]
          ]
        ];



      ?>
      </head>
      <body>

          <?php
                foreach ($db as $type => $people) {


                  if ($type == 'teachers') {
                    echo '<div class= "teacher">'. $type . '</div> <br>';
                    foreach ($people as $person) {
                      echo '<div class= "teacher">' . $person['name'] . $person['lastname'].'</div>';
                    }

                  }
                  else if ($type == 'pm'){
                    echo '<div class= "pm">'. $type .'</div> <br>';
                    foreach ($people as $person) {
                      echo '<div class= "pm">' .
                            $person['name'] .
                            $person['lastname'] .
                            '</div>';
                    }

                  }
                }
          ?>
      </body>
    </html>
