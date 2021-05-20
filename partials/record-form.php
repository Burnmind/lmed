<div class="form-block centered-top">
    <div class="form-container">
        <form name="record-form-write" method="post" action="javascript:void(0)" class="form-group">
            <div class="form-text">Запись на приём</div>
            <div>
                <input type="text" name="your-name" placeholder="Ваше Имя" size="40" class="form-control"> <br>
                <input type="text" name="telephone" placeholder="Телефон" size="10" class="form-control"> <br>
                <textarea type="text" name="comment" placeholder="Комментарий" cols="40" rows="4"  class="form-control"></textarea><br>
            </div>
            <input type="submit"
                    <?
                    /*
                     * TODO переделать на открытие по
                     *   успешному ответу с бэка, когда будет реализовано
                     */
                    ?>
                   data-bs-toggle="modal" data-bs-target="#successModal"
                   data-bs-dismiss="modal"
                   value="Записаться на приём" class="btn button-form">
        </form>
    </div>
</div>
