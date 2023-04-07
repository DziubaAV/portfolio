<!-- Успех! -->
@if(session('success'))
<div class="alert success">
  <span class="closebtn">×</span>  
 <h2>{{ session('success') }}</h2> 
</div>
@endif

<!-- Ошибка! -->
@if($errors->any())
<div class="alert">
  <span class="closebtn">×</span>  
  <ul>
        @foreach($errors->all() as $error)
        <h2><li>{{ $error }}</li></h2>
        @endforeach
    </ul>
</div>
@endif

<style>

.alert {
    padding: 20px;
    background-color: #f44336;
    color: white;
    opacity: 1;
    transition: opacity 0.6s;
    margin-bottom: 15px;
}

.alert.success {
    background-color: #4CAF50;
}

.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}

</style>

<script>
var close=document.getElementsByClassName("closebtn");
var i;

for (i=0; i < close.length; i++) {
    close[i].onclick=function() {
        var div=this.parentElement;
        div.style.opacity="0";
        setTimeout(function() {
                div.style.display="none";
            }
            , 600);
    }
}

</script>