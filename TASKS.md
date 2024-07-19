# Задачи 

прошел урок 6, кроме домашки

* после сидов
  * добить все контроллеры по api для сущностей category, tag, role, comment, profile
  * добить все контроллеры для сущностей category, tag, role, comment, profile
  * к уроку 4 сделать GoCommand ко всем сущностям

* урок 5 - инверсия в самом конце не заработала

  ```
  return $this->post->category();
  // не находит
  ```
  
* сиды комментов не добавляются

* Лайкнуть кодом выдает ошибку
  ```apacheconf
  // GoCommand
  $profile = Profile::first();
  $profile::likedPosts()->attach([5]);
  
  // result
  Illuminate\Database\UniqueConstraintViolationException 
  SQLSTATE[23505]: Unique violation: 7 ERROR:  duplicate key value violates unique constraint "likeable_pkey"
  DETAIL:  Key (id)=(2) already exists. (Connection: pgsql, SQL: insert into "likeable" ("likeable_id", "likeable_type", "profile_id") values (5, App\Models\Post, 1))  
  ```