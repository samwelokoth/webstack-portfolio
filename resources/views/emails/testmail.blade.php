Hey my future me , i can see you are really struggling with making this work. It'l definitely work


by your hardworking you, 

public function content()
{
    return new Content(
        view: 'mail.html-email',
        with: [
            'name' => $this->name
        ],
    );
}
