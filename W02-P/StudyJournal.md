DataBase Programming week02
============================
##새로 배운 내용
-----------------------------
[Server, PHP, MySQL]
* Clinet : server에게 network를 통해 정보 요청(request)

* Server : 기본적으로 html태그만 읽음 / php태그를 PHP에게 넘김

* PHP : 데이터베이스에게 php태그에 맞게 정보요청 / web page가 많아지고 data가 많아지면서 반복적인 일을 php에서 진행

* DataBase : 정보저장 및 정보 받아서 php에서 정보를 html로 바꾸줌

[mysqli_connet]
php를 mysql와 연결하기

[mysqli_query]
mysqli_query([연결 객체],[쿼리]);
데이터베이스에 대해 쿼리를 실행함
쿼리에 성공하면 TRUE를 반환, 실패하면 FALSE를 반환한다

[mysqli_error]
오류가 나오면 오류 출력한다
이때 mysqli_query의 반환값인 TRUE, FALSE를 활용한다

====================================
##문제 및 해결과정
-----------------------------
select.php에서 결과룰 출력할때 작성한 내용이 전체 출력되지 않았다
.$row['title']에서 '.'는 앞의 string과 연결하는 역할을 하는데 '.'를 넣지 않아서 출력되지 않았다.

[참고자료]
https://blog.naver.com/PostView.nhn?blogId=reviewer__&logNo=221413200890

============================
##회고
-----------------------------
clinet, server, php, database의 관계에 대해 자세히 알아갈 수 있는 시간이어서 좋았다. 또 1학년 때 배운 html문에 대해 다시 복습할 수 있는 시간이었다.
저번학기에는 단순히 database설계만 했지만 설계한 데이터베이스를 web에 연결하는 경험을 통해 수업에 흥미를 갖게 되었다.
내가 cmd를 통해 설계한 데이터베이스를 web site에 띄우고 web page를 서로 연결하여 database에 저장되어있는 data를 출력해주는 것을 시각적으로 볼 수 있어서 좋았다.
