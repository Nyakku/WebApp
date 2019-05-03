import java.awt.Button;
import java.awt.TextField;
import java.awt.*;
import java.awt.event.*;
import java.applet.*;
import java.io.*;

import java.security.MessageDigest;
import java.security.NoSuchAlgorithmException;

public class SHA1App extends Applet implements ActionListener{
  Button button1;
  TextField txt1;
  String pass;
  /**
     * @param args
     * @throws NoSuchAlgorithmException
     */
  public void init(){
  
    button1 = new Button("Button 1");
    add(button1);
    button1.addActionListener(this);
    
    txt1 = new TextField("Enter your password");
    add(txt1);
    
    
    
  }
  

    
    public void actionPerformed(ActionEvent e){
      if(e.getSource() == button1){
        
        pass=txt1.getText();
        try{
        txt1.setText(sha1(pass));
        }catch(Exception f){
        }
        
      }
    }
    
    public void paint(Graphics g){
      g.drawString("SHA-1 Encryption System", 50, 40);
      
    }
    
    static String sha1(String input) throws NoSuchAlgorithmException {
        MessageDigest mDigest = MessageDigest.getInstance("SHA1");
        byte[] result = mDigest.digest(input.getBytes());
        StringBuffer sb = new StringBuffer();
        for (int i = 0; i < result.length; i++) {
            sb.append(Integer.toString((result[i] & 0xff) + 0x100, 16).substring(1));
        }

        return sb.toString();
    }
}
