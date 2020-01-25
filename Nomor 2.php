<?php
 
class Pengguna extends AppModel {
 
    public $useTable = 'peserta';
    public $validate = array(
        'nama_lengkap' => array(
            'rule' => array('minLength', '2'), //minimal 2 huruf
            'required' => true, //tidak boleh kosong, required
            'message' => 'Mohon masukkan minimal 2 huruf'
        ),
        'email' => array(
            'rule' => 'email', //harus format e-mail
            'required' => true,
            'message' => 'Format e-mail harus benar'
        ),
        
        'username' => array(
            'alphaNumeric' => array(
                'rule'     => 'alphaNumeric', //harus format e-mail
                'required' => true,
                'message'  => 'Username harus huruf dan angka'
            ),
            'between' => array(
                'rule'    => array('between', 8, 12),
                'message' => 'Username minimal 5 dan maksimal 20 karakter'
            )
        ),
        'password' => array(
            'alphaNumeric' => array(
                'rule'     => 'alphaNumeric', //harus format e-mail
                'required' => true,
                'message'  => 'Password harus huruf dan angka'
            ),
            'between' => array(
                'rule'    => array('between', 9, 20),
                'message' => 'Password minimal 9 dan maksimal 20 karakter'
            )
        ),
    );
 
}
?>

<?php
 
class MemberController extends AppController
{
    public $uses = array('Pengguna');
 
    public function register()
    {
        if (!empty($this->request->data))
        {
            if ($this->Pengguna->save($this->request->data))
            {
                $this->Session->setFlash('Data berhasil disimpan');
                $this->redirect('/');
            }
        }
    }
 
}
?>
