<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" description="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" description="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title> Đăng nhập & Đăng kí </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,400i|Noto+Sans:400,400i,700"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
    <link rel="stylesheet" href="../css/form.css">

</head>

<body ng-app="myApp" ng-controller="myCtrl">
    <div class="container">
        <div class="row">
            <div class="col-3" style="margin:15px">
                <h4> FORM THÔNG TIN </h4>
                <hr width="100%" color="red">
                <form name="userForm" ng-submit="submitForm()" novalidate>
                    <div class="form-group"> 
                        <label for="fullname">Họ và tên</label>
                        <input type="text" class="form-control" placeholder="Họ và tên" name="name" class="form-control"
                            ng-model="name" ng-minlength="2" ng-maxlength="20" ng-required=true
                            onmouseenter="this.style.backgroundColor='yellow'" onmouseleave="this.style.backgroundColor='pink'"
                            onkeydown="this.style.backgroundColor='pink'" onkeyup="this.style.backgroundColor='yellow'">
                        <span class="error" ng-show="userForm.name.$error.required">Không được để trống !!!</span>
                        <span class="error" ng-show="userForm.name.$error.minlength">Không dưới 2 kí tự</span>
                        <span class="error" ng-show="userForm.name.$error.maxlength">Dưới 20 kí tự</span>
                    </div> 
                    <div class="form-group">
                        <label for="phonenumber">Số điện thoại</label>
                        <input type="number" class="form-control" placeholder="Số điện thoại" name="phone"
                            class="form-control" ng-model="phone"
                            ng-pattern="/^[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]/" ng-required=true
                            onmouseenter="this.style.backgroundColor='yellow'" onmouseleave="this.style.backgroundColor='pink'"
                            onkeydown="this.style.backgroundColor='pink'" onkeyup="this.style.backgroundColor='yellow'">
                        <span class="error" ng-show="userForm.phone.$error.required">Không được để trống !!</span>
                        <span class="error" ng-show="userForm.phone.$error.pattern"> Có 10 số</span>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="mail" name="mail" placeholder="Email" ng-model="mail" 
                            ng-pattern="/^.+@gmail\.com$/" ng-required=true
                            onmouseenter="this.style.backgroundColor='yellow'" onmouseleave="this.style.backgroundColor='pink'"
                            onkeydown="this.style.backgroundColor='pink'" onkeyup="this.style.backgroundColor='yellow'">
                        <span class="error" ng-show="userForm.mail.$error.required">Không để trống!!!</span>
                        <span class="error"
                            ng-show="!userForm.mail.$error.required && userForm.mail.$error.pattern">Phải
                            đúng định dạng Mail</span>

                    </div>
                    <div class="form-group">
                        <label for="adress">Địa chỉ</label>
                        <input type="text" ng-model="adress" name="adress" class="form-control" placeholder="Địa chỉ"
                            id="adress" ng-required=true
                            onmouseenter="this.style.backgroundColor='yellow'" onmouseleave="this.style.backgroundColor='pink'"
                            onkeydown="this.style.backgroundColor='pink'" onkeyup="this.style.backgroundColor='yellow'">
                        <span class="error" ng-show="userForm.adress.$error.required">Không để trống!!!</span>
                    </div>
                </form>
            </div>
            <div class="col-4" style="margin:15px">
                <h4>XÁC NHẬN</h4>
                <hr width="100%" color="red">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th> Giày thể thao </th>
                            <th>Tổng tiền </th>

                        </tr>
                    </thead>
                    
                </table>
                <input type="submit" class="btn btn-info" value="Đăng kí" ng-click="Submit()"
                    ng-disabled="userForm.$invalid"
                    onmouseenter="this.style.backgroundColor='yellow'" onmouseleave="this.style.backgroundColor='pink'"
                    onkeydown="this.style.backgroundColor='pink'" onkeyup="this.style.backgroundColor='yellow'">
            </div>
            
        </div>

    </div>


    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script> -->
    
    <!-- <script src="//code.angularjs.org/snapshot/angular.min.js"></script> -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="../js/angular.min.js"></script>
    <script src="../js/form.js"></script>
</body>

</html>