var mailerrorbox = "true";
var nameerrorbox = "true";
var messageerrorbox = "true";

var contactForm = new Vue ({
  el: '#contact-form',
  data: {
    nameInput: '',
    nameMiss: '',
    mailInput: '',
    mailMiss: '',
    messageInput: '',
    messageMiss: '',
    inputData: false,
    makeSure: true,
  },
  computed: {
    isNameValid: function () {
      //一文字以上名前が記入されていたらtrueを返す
      return this.nameInput.trim().length !== 0;
    },
    isMailValid: function () {
      //一文字以上メールアドレスが記入されていたらtrueを返す
      return this.mailInput.trim().length !== 0;
    },
    isMessageValid: function () {
      //一文字以上お問い合わせ内容が記入されていたらtrueを返す
      return this.messageInput.trim().length !== 0;
    },
    isClickValid: function () {
      //名前・メールアドレス・お問い合わせが記入されたらtrueを返す
      return this.isNameValid && this.isMailValid && this.isMessageValid;
    }
  },
  methods: {
    clickbtn: function () {
      this.inputData = true;
      this.makeSure = false;

      let namedata = this.nameInput;
      let maildata = this.mailInput;
      let messagedata = this.messageInput;

      mailerrorbox = "true";
      nameerrorbox = "true";
      messageerrorbox = "true";

      if(!namedata){
        //名前が記入されていなかったらエラーを表示
        this.nameMiss = "名前が入っていません";
      }else{
        nameerrorbox = "false";
      };

      if(!maildata){
        //メールアドレスが記入されていなかったらエラーを表示
        this.mailMiss =  "メールが入ってないよ";
      }else if(maildata.match(/.+@.+\..+/)==null){
        //メールアドレスの形式が間違っていたらエラーを表示
        this.mailMiss = "メールの形式が間違ってます";
      }else{
        mailerrorbox = "false";
      };

      if(!messagedata){
        //お問い合わせが記入されていなかったらエラーを表示
        this.messageMiss = "メッセージが入っていません";
      }else{
        messageerrorbox = "false";
      };
    },
    clickbtn_back: function () {
      this.inputData = false;
      this.makeSure = true;

      //記入エラーをリセットする
      this.nameMiss = "";
      this.mailMiss = "";
      this.messageMiss = "";
    }, 
    clickbtn_send: function () {
      //エラーがなかったらフォームの内容を送信する
      if(mailerrorbox == "false" && nameerrorbox && messageerrorbox == "false"){
        let params = new URLSearchParams();
        params.append('nameInput', this.nameInput);
        params.append('mailInput', this.mailInput);
        params.append('messageInput', this.messageInput);
        axios.post(path + '/functions.php', params)
        .then(function (response) {
            alert("送信が完了致しました！")
            document.location = "./"
        })
        .catch(function (error) {
            console.log("error");
        })
      };
    }
  }
})