<div class="row">
            <div class="col-8">
            <form action="/user/update/<?php echo $user->user_id ?>" method="post">
                   <div class="form-group">
                       <label>ชื่อ</label>
                       <input value='<?php echo $user->fullname ?>' name="fullname" type="text" class="form-control" placeholder="กรอกชื่อ สกุล"> 
                   </div>
                   <div class="form-group">
                       <label>อีเมล์</label>
                       <input value='<?php echo $user->email ?>' name="email" type="email" class="form-control" placeholder="กรอกอีเมล์">
                   </div>
                   <div class="form-group">
                       <label>อายุ</label>
                       <input value='<?php echo $user->age ?>' name="age" type="number" class="form-control" placeholder="กรอกอายุ">
                   </div>
                   <div class="form-group">
                       <label>เบอร์โทร</label>
                       <input value='<?php echo $user->tel ?>' name="tel" type="tel" class="form-control" placeholder="กรอกเบอร์โทร">
                   </div>

                   <button type="submit" class="btn btn-primary">บันทึก</button>
           </form>


            </div>
            <div class="col-4">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-primary">ลาบากุย ติมุยบุเละ</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">ยังยังบาลาเตโล</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-success">ฮันเซงยังบาละ</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-danger">อุอุเนลังเซเด</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-warning">ฮัมมาเลเดวะ</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-info">ไอเนยังเลยะ</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-light">กาลังฮัยละ</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-dark">ยุนัยไซฮุ</a>
            </div>
            </div>
        </div>