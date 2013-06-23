<!DOCTYPE html>
<html>
<head>
    <title>Require JS Configuration</title>

    <script src="http://requirejs.org/docs/release/2.1.6/comments/require.js"></script>
    <script>
        requirejs.config({

            baseUrl: '',
            config:{
                  'bread':{
                    kind:'<?= get_url_param('bread', 'white bread' )?>'
                  },
                  'ham':{
                    kind:'<?= get_url_param('ham', 'polish ham') ?>'
                  }
            }
        });


        //Start the main app logic.
        requirejs(['bread', 'ham' ],
                function   ( bread, ham ){

                        console.log( 'main', bread  );
                });
    </script>

    <?
      //to quickly get the param values, i define here default
      function get_url_param( $variable, $default='' )
      {
            return !empty( $_GET[ $variable ] )?$_GET[ $variable ]:$default;
      }
    ?>

</head>
<body>
This is a small example how to provide a configuration to objects defined in different Javascript files. <a href="http://requirejs.org/" target="_blank">RequireJS</a>, makes it easy for us to pass these objects to our files within the main page. This is how i find great not to ever bother in assigning php values within the javascript files. 

Check this demo in your browser's console.


</body>
</html>