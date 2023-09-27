<style>
  .line-block {
    position: fixed;
    right: 15px;
    bottom: 0;
    z-index: 990;
    border-radius: 8px 8px 0 0;
  }
  .modal-footer {  
    justify-content: space-between;  
  }
</style>
<script>
  let check = ()=>{
    let name = document.getElementById('name').value
    let company = document.getElementById('company').value
    let tel = document.getElementById('tel').value
    let message = document.getElementById('message').value
    let buttonmes = document.getElementById('sendmessage').classList
    if(isNaN(tel)){
      $('#telErr').html("ต้องเป็นตัวเลขเท่านั้น")
    }else{
      $('#telErr').html("")
    }
    if(name != "" && company != "" && tel != "" && message != "" && !isNaN(tel)){
      buttonmes.remove('disabled')
    }
    else{
      buttonmes.add('disabled')
    }
  }
</script>
<button
  type="button"
  class="btn btn-success line-block"
  data-bs-toggle="modal"
  data-bs-target="#contactModal"
  data-bs-whatever="@mdo"
>
  ติดต่อสอบถาม
</button>

<div
  class="modal fade"
  id="contactModal"
  tabindex="-1"
  aria-labelledby="contactModalLabel"
  aria-hidden="true"
>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="contactModalLabel">แบบฟอร์มติดต่อกลับ</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <form method="post" action="sendnoti.php">
        <div class="modal-body">
          <div class="mb-3">
            <label for="name" class="col-form-label">ชื่อ<span style="color:red">*</span>:</label>
            <input
              type="text"
              class="form-control"
              id="name"
              name="name"
              required
              onkeyup="check()"
              maxlength="200"
            />
            <label for="company" class="col-form-label">หน่วยงาน<span style="color:red">*</span>:</label>
            <input
              type="text"
              class="form-control"
              id="company"
              name="company"
              required
              onkeyup="check()"
              maxlength="200"
            />
            <label for="tel" class="col-form-label">โทรศัพท์<span style="color:red">*</span>:<span id="telErr" style="color:red"></span></label>
            <input
              type="tel"
              class="form-control"
              id="tel"
              name="tel"
              required
              onkeyup="check()"
              maxlength="10"
            />
            <label for="email" class="col-form-label">Email(ถ้ามี):</label>
            <input type="email" class="form-control" id="email" name="email" maxlength="200" />
            <label for="line" class="col-form-label">Line(ถ้ามี):</label>
            <input type="text" class="form-control" id="line" name="line" maxlength="100"/>
            <label for="message" class="col-form-label">ข้อความ<span style="color:red">*</span>:</label>
            <textarea
              class="form-control"
              id="message"
              name="message"
              required
              onkeyup="check()"
              maxlength="2000"
            ></textarea>
          </div>
        </div>
        <div class="modal-footer">
        <script>
          $(document).ready(()=>{
            $("#telnow").attr("style", "display:none");
            if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
              $("#telnow").attr("style", "display:block");
            }
          })
        </script>
          <a href="tel:028844398" id="telnow" style="display: block;">
          <button
            type="button"
            class="btn btn-success"
          >
          <i class="bi bi-telephone-fill"></i> โทรเลย!
          </button>
          </a>
          <button
            type="button"
            class="btn btn-secondary"
            data-bs-dismiss="modal"
          >
            ปิด
          </button>
          <button type="submit" name="submit" class="btn btn-primary disabled" id="sendmessage">
          <i class="bi bi-send"></i> ส่งข้อความ
          </button>
        </div>        
        </form>
    </div>
  </div>
</div>