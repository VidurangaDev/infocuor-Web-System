public function up()
{
    Schema::create('event_submissions', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('phone');
        $table->string('email');
        $table->string('event_name');
        $table->string('event_time'); // Day or Night
        $table->string('indoor_outdoor'); // Indoor or Outdoor
        $table->string('location');
        $table->string('faculty');
        $table->integer('duration');
        $table->integer('audience');
        $table->date('date');
        $table->time('time');
        $table->json('requirements'); // To store multiple requirements in JSON format
        $table->json('photo_types'); // To store multiple photo types in JSON format
        $table->json('video_types'); // To store multiple video types in JSON format
        $table->timestamps();
    });
}
