DataBase Programming week03
============================
## 새로 배운 내용
-----------------------------
[보안 문제 관리의 필요성]
 - system 내부를 곤란에 빠트리는 정보나 악의적인 정보를 clinet가 input과정에 보낼때
 - 출력되는 과정에서 어떤 문제를 발생시켜 정상적이지 않은 데이터를 출력할 때

 => 먼저 사용자가 request한 것을 모두 위험한 것이라고 취급사고 각 단계 별로 검증 과정을 통해서 모든 단계를 통과하면 database에 저장할 수 있도록 함으로써 보안을 강화한다.

[보안 관리 - SQL Injection]
 - 임력 값에 대한 검증을 통해 입력 값을 문자열로 인식하여 공격쿼리가 들어가도 의미없는 단순 문자열로 처리함으로서 보안을 관리하는 방법이다.

[보안 관리 - mysqli_real_escape_string()]
 - 인자로 들어온 데이터 중에서 SQL을 주입하는 공격에 사용될 수 있는 기호를 문자로 바꿔버리는 역할을 한다.
 - mysqli_real_escape_string ( mysqli $link , string $escapestr ) : string
 - return values : string type

[UPDATE / DELETE]
 - 사용자가 update나 delete하고 싶은 data를 클릭하면 해당하는 data의 id를 보내어 data를 update나 delete하는 과정을 배웠다.
  - UPDATE : 사용자가 이전에 작성한 data를 가져와 필요한 부분만 update하는 방식을 취했다.

[데이터 은닉]
 - 데이터 은닉을 하기 위해서 data를 전송하는 방식을 GET에서 POST로 바꾸고 link 태그 대신 form 태그를 이용했다.

 ## 문제 및 해결과정
 -----------------------------
  - process.create.php 부분에서 아래와 같이 작성하였더니 에러가 발생하였다.

  <pre>
  <code>
  $query = "
     INSERT INTO minions
       (title, description, created)
       VALUES (
         '{$filtered['title']}',
         '{$filtered['description']}',
         now()
         )

    ";
    </code>
</pre>

<pre>
<code>
use of undefined constant ‘title’ - assumed '‘title’'
(this will throw an error in a future version of php)
</code>
</pre>

- 그래서 에러 메세지에 따라 title과 description을 ' '가 아닌 " " 로 바꿨더니 문제가 해결되었다.


적용 뒤
<pre>
<code>
$query = "
   INSERT INTO minions
     (title, description, created)
     VALUES (
       '{$filtered["title"]}',
       '{$filtered["description"]}',
       now()
       )

  ";
  </code>
</pre>

[참고자료]
https://stackoverflow.com/questions/2941169/what-does-the-php-error-message-notice-use-of-undefined-constant-mean

## 회고
-----------------------------
한 주차씩 시간이 갈수록 코드가 길어짐에 따라 php를 이용한 web page가 동적으로 변하는 것을 보고 뿌뜻했다. 비록 아직까지는 글을 작성하고 삭제만 할 수 있지만 이 수업이 끝나게 되면 web page에 내가 원하는 동작을 코딩 할 수 있을 것 같다는 자신감이 생겼다. 1학년 때는  web page를 꾸미는 html, css, javascript를 배웠고 3학년 1학기 때는 database 구조를 만드는 것을 배웠다. 이번에는 그전에 배웠던것을 종합하여 web page 꾸는 것과 database구조를 만들고 client가 입력한 data를 직접database에 넣고 필요에 따라 data를 가져와 web page에 보이는 것까지 구현했다. 이전에 배운 개념들을 종합적으로 이용함으로써 서로 연관이 없다고 생각했던 부분들이 연결되는 느낌이 들었다.

## 동작 화면 공유 링크
-----------------------------
https://www.youtube.com/watch?v=T9Zqs2uLYAI&feature=youtu.be
