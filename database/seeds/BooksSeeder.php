<?php

use Illuminate\Database\Seeder;
use App\Book;
use App\Author;
use App\User;
use App\BorrowLog;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample penulis
        $author1 = Author::create(['name' => 'Randhy Bryan Croen Field']);
        $author2 = Author::create(['name' => 'Venny Avrio Lita']);
        $author3 = Author::create(['name' => 'Sephia Sharu Rhamanadi']);

        // Sample buku
        $book1 = Book::create(['title' => 'Aku Selalu Menanti & Menunggu', 'amount' => 3, 'author_id' => $author1->id]);
        $book2 = Book::create(['title' => 'Kini Aku Telah Bahagia', 'amount' => 2, 'author_id' => $author2->id]);
        $book3 = Book::create(['title' => 'Semangat Idul Fitri', 'amount' => 4, 'author_id' => $author3->id]);
        $book4 = Book::create(['title' => 'Kisah Kasih Di Sekolah', 'amount' => 1, 'author_id' => $author3->id]);

        // Sample peminjaman buku
        $member = User::where('email', 'member@gmail.com')->first();
        BorrowLog::create(['user_id' => $member->id, 'book_id' => $book1->id, 'is_returned' => 0]);
        BorrowLog::create(['user_id' => $member->id, 'book_id' => $book2->id, 'is_returned' => 0]);
        BorrowLog::create(['user_id' => $member->id, 'book_id' => $book3->id, 'is_returned' => 1]);
    }
}
