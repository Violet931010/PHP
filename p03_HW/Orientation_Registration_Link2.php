<html>
    <head>
        <title>資管系迎新行程規劃與報名表單</title>
        <meta charset="utf-8">
    </head>
    <body>
        <center><font size="6" color="brown">資管系迎新行程規劃與報名表單</font><br>
            <table border="1" width="600" style="text-align: center;">
            <tr><th colspan="4" style="font-size: 20px;">迎新行程表</th></tr>
            <tr><td colspan="2" align="center">Day1</td><td colspan="2" align="center">Day2</td></tr>
            <tr><td>8:00-8:15</td><td>集合</td><td>7:30-8:30</td><td>洗漱+早餐時間</td></tr>
            <tr><td>8:15-11:30</td><td>坐遊覽車到墾丁</td><td>8:30-10:30</td><td>大地遊戲</td></tr>
            <tr><td>11:30-12:30</td><td>午餐時間</td><td>10:30-12:00</td><td>賭場遊戲</td></tr>
            <tr><td>12:30-14:00</td><td>破冰遊戲</td><td>12:00-13:00</td><td>午餐時間</td></tr>
            <tr><td>14:00-16:00</td><td>沙灘活動</td><td>13:00-13:30</td><td>坐車到海生館</td></tr>
            <tr><td>16:00-17:00</td><td>回飯店盥洗+休息</td><td>13:30-15:30</td><td>海生館被動物看</td></tr>
            <tr><td>17:00-18:30</td><td>墾丁大街</td><td>15:30-17:00</td><td>團康遊戲</td></tr>
            <tr><td>18:30-19:00</td><td>飯店休息+吃晚餐</td><td>17:00-20:00</td><td>遊覽車回高大</td></tr>
            <tr><td>19:00-21:00</td><td>迎新晚會</td><td>20:00-結束</td><td>迎新結束啦!</td></tr>
            <tr><td>21:00-22:30</td><td>夜教活動</td></tr>
            <tr><td>22:30-傍晚</td><td>睡搞搞嘍!</td></tr>

        </table>

        <br>

        <font size="4">填寫表單：</font>
        <form action="Link_Reply.php" method="GET">
            姓名：<input type="text" name="uName"><br>
            學號：<input type="text" name="uNumber"><br>
            性別：男生<input type="radio" name="uGender" value="male">女生<input type="radio" name="uGender" value="female"><br>
            身分證字號：<input type="password" name="uPwd"><br>
            電話：<input type="text" name="uPhone"><br>
            生日：<input type="date" name="uBirth"><br>
            電子郵件：<input type="email" name="uEmail"><br>
            系服想製作的顏色：<input type="color" name="uColor"><br>
            吃葷還是素：葷<input type="checkbox" name="uFood[]" value="葷">素<input type="checkbox" name="uFood[]" value="素"><br>
            是否參加：<select name="uJoin">
                <option value="參加">參加</option>
                <option value="忍痛放棄下次一定">忍痛放棄下次一定</option>
            </select><br>
            Q&A：<br>
        <textarea cols="30" rows="15" name="uComment"></textarea><br>
        <input type="submit" value="送出"><input type="reset" value="清除">
    </form>
    </center>
    </body>
</html>