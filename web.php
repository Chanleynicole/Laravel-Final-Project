php
Route::get('/books', [BookController::class, 'index'])->name('books.index');

App/HTTP/Controllers/BookController.php:

php
namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }
}
