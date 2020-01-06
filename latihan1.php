<html>

    <body>
        <input type="text" id="input"> <button id="submit">submit</button>
        <br><h3><div id="box"></div></h3>
    </body>
    <script type="text/javascript">

        // url dengan data json
        // function load_ajak(url,callback){

        //     // membuat object xmlhttprequest
        //     var xhr = new XMLHttpRequest();
        //     xhr.onreadystatechange = cekStatus;

        //     function cekStatus(){
        //         if( xhr.readyState === 4 && xhr.status === 200 ){
        //             callback(xhr.responseText);
        //         }
        //     };

        //     // melakukan requestnya
        //     xhr.open('GET',url, true);
        //     xhr.send();

        // }

        // //memangil otomatis
        // load_ajak('data.json', function(data){
        //     console.log(data);
        //     data = JSON.parse(data);
        //     document.getElementById('box').innerHTML = data;
        // });

    

        //pertama kita buat function requesnya
        function load_ajak(url,callback){

            //membuat requestnya XMLHttpRequest
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = cekStatus;

            function cekStatus(){
                // readyState, status
                if(xhr.readyState === 4 && xhr.status === 200){
                    callback(xhr.responseText);
                }
            };

            // menerima url dan request
            xhr.open('GET',url,true);
            xhr.send();
        };

        var submit = document.getElementById('submit');

        //panggil dengan event
        submit.addEventListener('click',function(){
            var text = document.getElementById('input').value;
            load_ajak('data.php?q=' + text,function(data){
            document.getElementById('box').innerHTML = data;
            });
        });

    </script>
</html>