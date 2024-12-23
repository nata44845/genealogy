# План проекта Genealogy

Настраиваем среду выполнения
[setup.md](setup.md)

## Шаг 1. Создаем новый проект

В VSCode открыть папку C:\Nata\git-nata

```
symfony check:requirements 

symfony new --webapp genealogy
```

Если выдает ошибку

```
composer config -g --disable-tls false

symfony new --webapp genealogy
```

