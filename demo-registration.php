<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width-device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <style>
      body{
        background-color: purple;
        font-family: Arial;
        padding: 0;
        margin: 0;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .account-wrapper{
        background-color: white;
        border: none;
        border-radius: 6px;
        width: 85%;
        max-width: 500px;
        padding: 5px;
        box-shadow: 2px 3px 6px rgba(0, 0, 0, 0.15);
        transition: all 0.3s ease;
        display: grid;
        grid-template: column;
        align-items: center;
        justify-content: space-around;
        outline: none;
      }
      .account-wrapper1{
        transition: all 0.3s ease;
        display: flex;
        flex-direction: 1 1;
        align-items: center;
      }
      .account-wrapperr{
        background-color: white;
        border: none;
        border-radius: 6px;
        width: 80%;
        max-width: 500px;
        padding: 5px;
        position: absolute;
        box-shadow: 2px 3px 6px rgba(0, 0, 0, 0.15);
        transition: all 0.3s ease;
        display: grid;
        grid-template: column;
        justify-content: space-around;
        align-items: center;
      }
      .account-wrapperrr{
        background-color: white;
        border: none;
        border-radius: 6px;
        width: 80%;
        max-width: 500px;
        padding: 5px;
        box-shadow: 2px 3px 6px rgba(0, 0, 0, 0.15);
        position: absolute;
        transition: all 0.3s ease;
        display: grid;
        grid-template: column;
        justify-content: space-around;
        align-items: center;
      }
      .account-wrapperrrr{
        background-color: white;
        border: none;
        border-radius: 6px;
        width: 80%;
        max-width: 500px;
        padding: 5px;
        box-shadow: 2px 3px 6px rgba(0, 0, 0, 0.15);
        position: absolute;
        transition: all 0.3s ease;
        display: grid;
        grid-template: column;
        justify-content: space-around;
        align-items: center;
      }
      input{
        padding: 3% 10%;
        width: 100%;
        background-color: transparent;
        border: 1px solid grey;
        border-radius: 6px;
        margin: 6px;
        outline: none;
      }
      .head {
        font-size: 14px;
        font-weight: bold;
        margin: 2px;
        width: 100%;
      }
      .headd {
        font-size: 14px;
        font-weight: bold;
        margin: 2px;
      }
      .headdd {
        font-size: 14px;
        font-weight: 500;
        margin: 2px;
        width: 100%;
      }
      div{
        margin-top: 10px;
        margin-left: 6px;
      }
      .ref-wrapper{
        width: 90%;
      }
      button{
        background-color: purple;
        color: white;
        padding: 6px 12px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-weight: bold;
      }
      .save-button{
        transition: all 0.3s ease;
        align-items: center;
        width: 90%;
        margin-top: 8px;
      }
      .save-button:hover{
        transform: scale(0.9);
      }
      .next-button{
        transition: all 0.3s ease;
        align-items: center;
        width: 90%;
      }
      .next-button:hover{
        transform: scale(0.9);
      }
      .done-button{
        transition: all 0.3s ease;
        align-items: center;
        width: 90%;
      }
      .done-button:hover{
        transform: scale(0.9);
      }
      .done-button1{
        transition: all 0.3s ease;
        align-items: center;
        width: 90%;
      }
      .done-button1:hover{
        transform: scale(0.9);
      }
      .ref-button{
        transition: all 0.3s ease;
        align-items: center;
        width: 90%;
      }
      .ref-button:hover{
        transform: scale(0.9);
      }
      .skip-button{
        transition: all 0.3s ease;
        align-items: center;
        width: 90%;
      }
      .skip-button:hover{
        transform: scale(0.9);
      }
      .save-wrapper{
        width: 100%;
        display: grid;
        grid-template: column;
        justify-content: space-around;
        align-items: center;
        display: inline-block;
        text-align: center;
      }
      .save-wrapper1{
        width: 100%;
        display: grid;
        grid-template: column;
        justify-content: space-around;
        align-items: center;
        display: inline-block;
        text-align: center;
      }
      .header-wrapper{
        background-color: white;
        width: 300px;
        height: 80px;
        border-radius: 6px;
        box-shadow: 2px 3px 6px rgba(0, 0, 0, 0.15);
        position: fixed;
        top: 3%;
        left: 13%;
        align-items: center;
        text-align: center;
        display: none;
      }
      .header-wrapper p{
        margin: 30px;
      }
      .side-wrapper{
        background-color: white;
        width: 300px;
        border-radius: 6px;
        box-shadow: 2px 3px 6px rgba(0, 0, 0, 0.15);
        position: fixed;
        top: -2%;
        left: -5%;
        bottom: -5%;
        align-items: center;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        z-index: 1;
        display: none;
      }
      .pic{
        width: 160px;
        border-radius: 6px;
        margin: 20px;
        margin-left: 80px;
      }
      .pep-talk{
        width: 115px;
        font-size: 12px;
        margin-left: 100px;
      }
      .activity-selection{
        display: inline-block;
        font-size: 12px;
      }
      .activity-wrapper{
        margin: 2px;
      }
      .activity-wrapper div{
        display: inline-block;
      }
      .emptyColumn{
        border: 1px solid red;
      }
      .result-text{
        display: inline-block;
        font-size: 12px;
        width: 200px;
        color: red;
        text-align: center;
      }
      .save-text{
        display: inline-block;
        font-size: 12px;
        margin-left: 160px;
        width: 200px;
        color: red;
        text-align: center;
      }
      .result-wrapper{
        display: inline-block;
      }
      .hide{
        opacity: 0;
        pointer-events: none;
      }
      .show{
        opacity: 1;
        pointer-events: auto;
      }
      .eye-icon{
        width: 3%;
        position: absolute;
        top: 74.5%;
        transform: translateY(-50%);
        right: 282px;
        cursor: pointer;
      }
      .eye-icon1{
        width: 3%;
        position: absolute;
        top: 74%;
        transform: translateY(-50%);
        right: 42px;
        cursor: pointer;
      }
      .input-wrapper{
        width: 70%;
      }
      .input-wrapperr{
        width: 90%;
      }
      .input-wrapperr10{
        width: 90%;
        margin: 14px;
      }
      .bruhh{
        width: 80%;
      }
      .bruhh1{
        width: 90%;
      }

      .emailInput{
        width: 90%;
      }
      .account-wrapper h1{
        font-size: 24px;
      }
    </style>
  </head>
  <body>
      <div class="account-wrapperr">
      <div class="bruhh1">
        <div>
          <p class="head">Referral programme</p>
        </div>
        <div class="ref-wrapper">
          <p class="headdd">If you want to join our referral Programme where you could receive R200 when 30 people create an account with your referral code or R1200 when 100 people create an account with your referral code, click the referral code button.</p>
        </div>
      </div>
      <div class="save-wrapper">
        <button class="ref-button">Referral code</button>
      </div>
      <div class="save-wrapper">
        <button class="skip-button">skip</button>
        <p class="save-text"></p>
      </div>
    </div>

    <div class="account-wrapperrr">
      <div class="bruhh1">
        <div>
          <p class="head">Registration Complete</p>
        </div>
        <div>
          <p class="headdd">Your account has been successfully created.</p>
        </div>
      </div>
      <div class="save-wrapper">
        <button class="done-button">Done</button>
      </div>
    </div>
    <div class="account-wrapperrrr">
      <div class="bruhh1">
        <div>
          <p class="head">Referral Programme</p>
        </div>
        <form action="kanye.php" method="post">
        <div class="input-wrapperr10">
          <p class="head">Email Address</p>
          <input type="email" placeholder="Email" class="emailInput" name="email">
        </div>
      </div>
      <div class="save-wrapper">
        <button class="done-button1">Done</button>
      </div>
    </form>
    </div>
    <script>
      const saveBtn = document.querySelector('.save-button');
      const nextBtn = document.querySelector('.next-button');
      const doneBtn = document.querySelector('.done-button');
      const doneBtn1 = document.querySelector('.done-button1');
      const refBtn = document.querySelector('.ref-button');
      const skipBtn = document.querySelector('.skip-button');
      const emailInput = document.querySelector('.emailInput');
      const resultText = document.querySelector('.result-text');
      const saveText = document.querySelector('.save-text');
      const activityCheck = document.querySelector('.activity-check');
      const accountWrapper = document.querySelector('.account-wrapper');
      const accountWrapperr = document.querySelector('.account-wrapperr');
      const accountWrapperrr = document.querySelector('.account-wrapperrr');
      const accountWrapperrrr = document.querySelector('.account-wrapperrrr');
      const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

      
      

      doneBtn.addEventListener('click', () => {
        accountWrapperr.classList.add('hide');
        accountWrapperrr.classList.add('hide');
        accountWrapperrrr.classList.add('hide');
      });

      skipBtn.addEventListener('click', () => {
        accountWrapperrr.classList.remove('hide');
        accountWrapperr.classList.add('hide');
        accountWrapperrrr.classList.add('hide');
      });

      refBtn.addEventListener('click', () => {
        accountWrapperrrr.classList.remove('hide');
        accountWrapperr.classList.add('hide');
        accountWrapperrr.classList.add('hide');
      });

      doneBtn1.addEventListener('click', () => {
        if(!emailInput.value.match(emailPattern)) {
            emailInput.classList.add('emptyColumn');
        } else {
            emailInput.classList.remove('emptyColumn');
            accountWrapperr.classList.add('hide');
            accountWrapperrrr.classList.add('hide');
            accountWrapperrr.classList.remove('hide');
        }
        
      });
      window.onload = () => {
        accountWrapperrr.classList.add('hide');
        accountWrapperrrr.classList.add('hide');
      };
    </script>
  </body>
</html>