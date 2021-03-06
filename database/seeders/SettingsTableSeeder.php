<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('settings')->delete();

        \DB::table('settings')->insert(array (
            0 =>
            array (
                'id' => 1,
                'title' => 'ЗАКАЗ ТРАНСФЕРА ОНЛАЙН',
                'about' => '<h3>Кто Мы?</h3><p>Times Transfer – принимающая сторона в Турции. Наши офисы и представительства расположены в Стамбуле, Анталии, Бодруме. Наши основные направления – индивидуальный и корпоративный туризм.</p><p>В нашей компании работают молодые и энергичные сотрудники, опыт работы которых более 10 лет. Компания имеет лицензию на работу в сфере туризма, а также свой парк автомобилей.</p><p>Мы готовы реализовать любые запросы! Это может быть поездка VIP уровня или просто доступный трансфер, экскурсионная программа по самым необычным местам Турции.</p><p>Какое бы путешествие вы не предпочли, мы всегда рады помочь Вам в подготовке и организации, учитывая все Ваши пожелания!</p>',
                'service_title' => 'Типы трансферов',
                'services' => NULL,
                'contact_title' => 'Наши контакты',
                'address' => 'Antalya Lara',
                'email' => 'Abdullaalioglu@gmail.com',
                'phone' => '+90 533 498 10 34',
                'created_at' => '2020-09-03 13:33:39',
                'updated_at' => '2020-09-03 14:41:44',
                'deleted_at' => NULL,
                'company' => 'Time Transfer',
            ),
        ));


    }
}
