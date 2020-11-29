<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <textarea type="text" cols="40" rows="10" placeholder="Enter text here" id="words" ></textarea>
    <p id="showdata"></p>
    <p id="showords"></p>
    <button type="submit" onclick="countwords()"> Count Words</button>
    <script>
    const countwords = () => {
      let noc = document.getElementById('words').value.length;
      let now = document.getElementById('words').value;
      now = now.match(/\w+/g);
      now = now.length;
      document.getElementById('showdata').innerHTML = "The total Charachter is = " + noc;
      document.getElementById('showords').innerHTML = "the Total Number of words are =" + now;
      }
    </script>
  </body>
</html>
