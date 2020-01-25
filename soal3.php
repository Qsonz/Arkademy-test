        <script type="text/javascript">
        function jbttangan() {
            var Baca = document.getElementById('angka').value;
            var J=0;
            var T=0;
            for(J;J<Baca;J++){
                T +=J;
            }
           console.log(T);
            var print = document.getElementById('result');
            print.value = T;
        }
        </script>