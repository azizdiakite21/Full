class MessageGoogle extends Mailable
{
    use Queueable, SerializesModels;

    public $data; // Données pour la vue

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $mailData = $this->data ;  // les données du mail à envoyer
        return $this->subject("TEST APPLICATION GESCO") // Le sujet
            ->view('emails.message-google',compact('mailData')); // La vue
    }
}