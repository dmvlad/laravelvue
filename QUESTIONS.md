# Lesson 3 

## Api/PostController.php

```apacheconf
public function destroy(Post $post)
{
	$post->delete();
	return Response::HTTP_NO_CONTENT;
	return response(['message' =>  'result'], Response::HTTP_OK);
}
```

*Вариант с сообщением приводит к ошибке, хотя удаляет. Почему? Хотя повторный запуск сработал ОК.*

## Роута нет - ошибка

```apacheconf
{{domain}}/api/posts # ОК
{{domain}}/api/posts/index # ошибка
```

```apacheconf
SQLSTATE[22P02]: Invalid text representation: 7 ERROR: invalid input syntax for type bigint: "index"
```

*Как выводить, что такого роута нет, страница 404?*

## Удаление несуществующей записи

```apacheconf
"message": "No query results for model [App\\Models\\Post] 5",
```

*Как отдавать страницу 404?*