window.onload = displayWelcomeMessage;
function displayWelcomeMessage() {
  var html = "<div class='message'>";
  html += "<div class='response_message'> <p>";
  html +=
    "Hi im Sola your virtual assistant <br>You can ask me any thing related with Aswan<br>I will try to give you accurate answers<br>How can i help you?";
  html += "</p> </div>";
  html +=
    "<img src='images/sola.png' style='width: 45px; border-radius: 50%; height: 100%;'>";
  html += "</div>";
  document.getElementById("dialog").innerHTML += html;
}
document.getElementById("submit").addEventListener("click", async (e) => {
  e.preventDefault();
  var dialog = document.querySelector("#dialog");
  dialog.scrollTop = dialog.scrollHeight - dialog.clientHeight;
  //get message
  var message = document.getElementById("message").value;
  var res = "";
  document.getElementById("submit").disabled = true;
  document.getElementById("submit").innerHTML = "wait";
  document.getElementById("submit").style.cursor = "wait";
  //clear message
  document.getElementById("message").value = "";
  if (!message) {
  } else {
    //display user message dialog
    {
      var html = "<div class='message'>";
      html += "<div class='user_message'> <p>";
      html += message;
      html += "</p></div>";
      html += "</div>";
      document.getElementById("dialog").innerHTML += html;
    }
    dialog.scrollTop = dialog.scrollHeight - dialog.clientHeight;
    //typing
    {
      html =
        "<div class='message' id='typing'><div class='response_message'><span> ... يكتب </span></div><img src='images/sola.png' style='width: 45px; border-radius: 50%; height: 100%;'></div>";
      document.getElementById("dialog").innerHTML += html;
    }
    //post to api
    {
      // const chatUrl = process.env.chatUrl;
      // const apiKey = process.env.apiKey;
      const url = `http://go.aswan.gov.eg:8002/chat/send_message?message=${encodeURIComponent(
        message
      )}`;
      // const url = `${chatUrl}/chat/send_message?message=${encodeURIComponent(message)}`;
      const response = await fetch(url, {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
          authorization: `Bearer kufgdi88unvuyt5467yvnio8ytow475ny6wo57i67nbinyo5w7i6n7y5o7w6i`,
          // "authorization": `Bearer ${apiKey}`
        },
      });
      if (response.status < 300) {
        const responseData = await response.json();
        const chatMessage = responseData.message;
        res = chatMessage;
      } else {
        res = "Sorry! Service is not available now";
        throw new Error("Error");
      }
    }
    //remove typing
    document.getElementById("typing").remove();
    //display response message dialog
    {
      var html = "<div class='message'>";
      html += "<div class='response_message'> <p>";
      html += res;
      // html += message;
      html += "</p> </div>";
      html +=
        "<img src='images/sola.png' style='width: 45px; border-radius: 50%; height: 100%;'>";
      html += "</div>";
      document.getElementById("dialog").innerHTML += html;
    }
    //reactivate chat
    {
      document.getElementById("submit").disabled = false;
      document.getElementById("submit").innerHTML = "send";
      document.getElementById("submit").style.cursor = "pointer";
    }
    dialog.scrollTop = dialog.scrollHeight - dialog.clientHeight;
  }
});
var chat = document.getElementById("chatContainer");
var chatIcon = document.getElementById("chatIcon");
function displayChat(status) {
  switch (status) {
    case 1:
      chat.style.display = "flex";
      chatIcon.style.display = "none";
      break;
    case 0:
      chat.style.display = "none";
      chatIcon.style.display = "flex";
      break;
  }
}
