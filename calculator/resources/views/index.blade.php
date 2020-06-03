<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<form action="{{route('calculator')}}" method="post">
    @csrf
    <div class="container col-6">

        <div class="container col-6">
            <input id="result" type="text" value="@if(isset($result)){{$result}} @endif" name="result" class="calculator-screen z-depth-1" readonly/>
        </div>

        <div class="calculator-keys">
            <div class="container col-6">
                <button type="button" class="operator btn btn-info" value="+" onclick="btn_Click(this.value)">+</button>
                <button type="button" class="operator btn btn-info" value="-" onclick="btn_Click(this.value)">-</button>
                <button type="button" class="operator btn btn-info" value="*" onclick="btn_Click(this.value)">&times;
                </button>
                <button type="button" class="operator btn btn-info" value="/" onclick="btn_Click(this.value)">&divide;
                </button>
            </div>

            <div class="container col-6">
                <button type="button" value="7" class="btn btn-light waves-effect" onclick="btn_Click(this.value)">7
                </button>
                <button type="button" value="8" class="btn btn-light waves-effect" onclick="btn_Click(this.value)">8
                </button>
                <button type="button" value="9" class="btn btn-light waves-effect" onclick="btn_Click(this.value)">9
                </button>
            </div>

            <div class="container col-6">
                <button type="button" value="4" class="btn btn-light waves-effect" onclick="btn_Click(this.value)">4
                </button>
                <button type="button" value="5" class="btn btn-light waves-effect" onclick="btn_Click(this.value)">5
                </button>
                <button type="button" value="6" class="btn btn-light waves-effect" onclick="btn_Click(this.value)">6
                </button>
            </div>

            <div class="container col-6">
                <button type="button" value="1" class="btn btn-light waves-effect" onclick="btn_Click(this.value)">1
                </button>
                <button type="button" value="2" class="btn btn-light waves-effect" onclick="btn_Click(this.value)">2
                </button>
                <button type="button" value="3" class="btn btn-light waves-effect" onclick="btn_Click(this.value)">3
                </button>
            </div>

            <div class="container col-6">
                <button type="button" value="0" class="btn btn-light waves-effect" onclick="btn_Click(this.value)">0
                </button>
                <button type="button" class="decimal function btn btn-secondary" value="."
                        onclick="btn_Click(this.value)">.
                </button>
                <button type="reset" class="all-clear function btn btn-danger btn-sm" value="all-clear">AC</button>
                <button type="submit" class="equal-sign operator btn btn-default" value="=">=</button>
            </div>
        </div>
    </div>
</form>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script>
    let result = document.getElementById('result');
    function btn_Click(operator) {
        result.value += operator;
    }
    function reset() {
        result.value="";
    }
</script>
</html>
