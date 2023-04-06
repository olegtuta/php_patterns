ENG: PHP PATTERNS

Common description: this code demonstrates well-known php-patterns with concrete examples.


DI pattern (dependency injection). The main idea of ​​DI is that an object should not manage its own dependencies, it should receive them from outside. That is, instead of creating objects inside the class, we pass them as parameters to the object's constructor or method. This allows you to separate the creation of objects and their use. This is a kind of isolation of concrete classes and transferring responsibility to more abstract ones.
Facade pattern. The main idea of ​​the Facade pattern is that we create an object that manages interaction with other objects in the system. The facade provides methods that delegate calls to low-level components of the system. Clients use only this facade object to interact with the entire system.

RUS: PHP Патерны

Общее описание: этот код демонстрирует хорошо известные php-патерны на кокретных примерах.
 

DI паттерн (внедрение зависимостей). Основная идея DI заключается в том, что объект не должен управлять своими зависимостями, он должен получать их извне. То есть вместо того, чтобы создавать объекты внутри класса, мы передаем их в качестве параметров конструктору или методу объекта. Это позволяет разделить создание объектов и их использование. Это своего рода обособление конкретных классов и перекладывание ответственности на более абстрактные.
Паттер “Фасад”. Основная идея паттерна Фасад заключается в том, что мы создаем объект, который управляет взаимодействием с другими объектами в системе. Фасад предоставляет методы, которые делегируют вызовы низкоуровневым компонентам системы. Клиенты используют только этот фасадный объект для взаимодействия со всей системой.
