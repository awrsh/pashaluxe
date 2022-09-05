<?php
$userInfo = $data['userInfo'];
?>

<div class="box">
    <div class="header">
         اطلاعات کاربر (شناسه کاربری:<?= $userInfo['user_id'] ?>)
    </div>
    <div class="content">
        <table>
            <tr>
                <td>
                    <span class="title">
                        نام و نام خانوادگی:
                    </span>
                    <span class="value">
<?= $userInfo['family'] ?>

                    </span>
                </td>

                <td>
                      <span class="title">
شماره همراه ثبت نامی:
                    </span>
                    <span class="value">
<?= $userInfo['email'] ?>
                    </span>
                </td>

                <td>
                      <span class="title">
کد ملی:
                      </span>
                    <span class="value">
<?= $userInfo['code_meli'] ?>
                    </span>
                </td>
            </tr>

            <tr>
                <td>
                    <span class="title">

شماره تلفن ثابت:
                    </span>
                    <span class="value">
<?= $userInfo['tel'] ?>
                    </span>
                </td>

                <td>
                      <span class="title">
شماره همراه دوم:
                      </span>
                    <span class="value">
<?= $userInfo['mobile'] ?>
                    </span>
                </td>

                <td>
                      <span class="title">
تاریخ تولد:
                      </span>
                    <span class="value">
<?= $userInfo['tavalod'] ?>
                    </span>
                </td>
            </tr>
            <tr>
                <td>
                    <span class="title">

محل سکونت:
                    </span>
                    <span class="value">
<?= $userInfo['address'] ?>
                    </span>
                </td>




                <td>
                      <span class="title">
جنسیت:
                      </span>
                    <span class="value">
                        <?php
                        $jensiat = $userInfo['jensiat'];
                        if ($jensiat == 1) {
                            echo 'مرد';
                        } else {
                            echo 'زن';
                        }

                        ?>
                    </span>
                </td>

                <td>
                      <span class="title">
دریافت خبرنامه:
                      </span>
                    <span class="value">
  <?php
  $khabarname = $userInfo['khabarname'];
  if ($khabarname == 1) {
      echo 'بله';
  } else {
      echo 'خیر';
  }

  ?>
                    </span>
                </td>
            </tr>

            <tr>
                <td>
                    <span class="title">
شماره کارت:
                    </span>
                    <span class="value">
 <?= $userInfo['cart_number'] ?> >
                    </span>
                    <span class="value">
بانک:<?= $userInfo['bank_name'] ?>
                    </span>
                </td>




                <td>
                      <span class="title">
تاریخ عضویت:
                      </span>
                    <span class="value">
                        <?= $userInfo['date_register']; ?>
                    </span>
                </td>

                <td>
                      <span class="title">
نوع سطح:
                      </span>
                    <span class="value">
  <?php
  $khabarname = $userInfo['level'];
  if ($khabarname == 1) {
      echo 'طلایی';
  } else {
      echo 'عادی';
  }

  ?>
                    </span>
                </td>
            </tr>

            <tr>
                <td colspan="3" style="text-align: left;">
                    <a href="panel/profile">
                        <img src="public/images/Edit.png">
                    </a>

                </td>
            </tr>

        </table>
    </div>
</div>