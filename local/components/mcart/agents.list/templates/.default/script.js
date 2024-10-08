BX.ready(function() {
        BX.bindDelegate(
        document.body, 'click', {className: 'star' },clickStar);


    // el.dataset.id ==="<?=$arItem['ID']?>"
    /*
    1. С помощью document.querySelectorAll получить все DOM-элементы с классом star
    2. Повесить обработчик события на click
    Пример: BX.bind(element, "click", clickStar);
     */
});

function clickStar(event) {
    event.preventDefault();
    const el = this;
    const agentID = this.dataset.id;
    console.log(agentID);
    /*
    Получить agentID, в template.php добавьте тегу в классов star атрибут dataset
    cо значением ID элемента Агента
    (https://developer.mozilla.org/en-US/docs/Web/API/HTMLElement/dataset)
     */

    if (agentID) { // если ID есть, то делаем ajax-запрос
        BX.ajax.runComponentAction(// https://dev.1c-bitrix.ru/api_help/js_lib/ajax/bx_ajax_runcomponentaction.php
                "mcart:agents.list", // название компонента
                "clickStar", // название метода, который будет вызван из class.php
                {
                    mode: "class", //это означает, что мы хотим вызывать действие из class.php
                    data: {
                        agentID: agentID // параметры, которые передаются на бэк
                    },
                }
            )
            .then( // если на бэке нет ошибок выполниться
                BX.proxy((response) => {
                    console.log(response); // консоле можно будет увидеть ответ от бэка, для разработки в конечном коде лучше убрать
                    let data = response.data;
                    if (data['action'] == 'success') {                        
                            el.classList.toggle('active');                            

                        // Отобразить пользователю, что агент добавлен в избраное (желтая звездочка, есть в верстке)
                    }

                }, this)
            )
            .catch( // если на бэке есть ошибки выполниться
                BX.proxy((response) => {
                     console.log(response.errors);
                }, this)
            );
    }

}
