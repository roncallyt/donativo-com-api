        <div class="center">
        Cacoal -
        @php
            echo  date('d/m/Y');
        @endphp
        </div>

    </div>

</div>


<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script>
    $(document).ready(function (){
        Materialize.updateTextFields();
        $(".button-collapse").sideNav();
        $('select').material_select();
    });
</script>
</body>
</html>
