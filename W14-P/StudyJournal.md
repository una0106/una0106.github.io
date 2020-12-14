DataBase Programming week14
============================
##새로 배운 내용
-----------------------------
 - 데이터 삽입
    1) 한개 삽입 : db.data.insertOne({x:0})
    2) 여러개 삽입 :
    db.data.insertMany([{x:0,y:1},{x:3,y:[3,4,5]}])

  - 데이터 조회
    db.data.find()

  - 데이터 수정
    db.data.replaceOne({x:1},{x:13,y:12})

  - 데이터 삭제
    1) 한개 삭제 : db.data.deleteOne({x:0})
    2) 전체 삭제 : db.data.deleteMany({})

## 회고
-----------------------------
 처음 접해보는 mongodb에 대해 배우게 되어서 좋았다. cmd창을 이용해 데이터를 넣고 조작하는게 가독성이 떨어져서 힘들기는 했다. 
##과제 링크
-------------------------------
https://youtu.be/IzOxed15tXc
