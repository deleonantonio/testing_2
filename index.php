<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Project 1: About Me</title>
    <!-- local CSS -->
    <link rel="stylesheet" href="css/main.css" type="text/css" />
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- custom JS -->
    <script type="text/javascript">
      $(document).ready(function() {
        var quotes = new Array("\"Only I can change my life. No one can do it for me.\" -Carol Burnett", 
                               "\"Optimism is the faith that leads to achievement. Nothing can be done without hope and confidence\" -Helen Keller", 
                               "\"With the new day comes new strength and new thoughts.\" -Eleanor Roosevelt", 
                               "\"Good, better, best. Never let it rest. 'Til your good is better and your better is best.\" -St. Jerome")
        // generates random key out of array length
        randno = quotes[Math.floor( Math.random() * quotes.length )];
        // inserts quote based on chosen key
        $('#quote').text( randno );
        console.log(randno);
      });

      // foreach ($quoteArray as $quote) {
      //   echo $quote;
      // }
    </script>
  </head>
  <body>
    <section>
      <h1>Venicio Antonio Vicente de Leon</h1>
        <img src="images/venicioantoniovicentedeleon.jpg" alt="Photo of Antonio" id="selfphoto">
        <h2>About Me</h2>  
        <p>My name is Antonio de Leon. It's definitely a pleasure to meet you all from around the world. I'm currently an ALB degree candidate studying computer science. Currently, I'm taking three other courses (Data Structures and two other non-CS courses). I plan on applying to tech companies as a product manager and hope this course will strengthen my back-end skills and make me a more competitive candidate. I'm definitely looking forward to learn with you all!<br />
        Antonio de Leon</p>
        <h2>Quote</h2>
        <p id="quote"><p>
        <img src="images/circle.png" alt="circle" id="circlebtn">
    </section>
    <footer>
      <p>Venicio Antonio de Leon | CSCI E-15 Dynamic Web Applications | Project 1</p>
    </footer>
  </body>
</html>