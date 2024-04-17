Php
public function up()
{
    Schema::create('books', function (Blueprint $table) {
        $table->id();
        $table->string('isbn');
        $table->string('title');
        $table->string('author');
        $table->text('description');
        $table->date('date_published');
        $table->timestamps();
    });
}
Php
namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    protected $model = Book::class;

    public function definition()
    {
        return [
            'isbn' => $this->faker->isbn13(),
            'title' => $this->faker->sentence(),
            'author' => $this->faker->name(),
            'description' => $this->faker->paragraph(),
            'date_published' => $this->faker->date(),
        ];
    }
}
