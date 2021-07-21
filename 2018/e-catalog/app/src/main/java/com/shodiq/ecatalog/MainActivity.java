package com.shodiq.ecatalog;

import android.content.DialogInterface;
import android.content.Intent;
import android.content.SharedPreferences;
import android.support.design.widget.FloatingActionButton;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.widget.GridLayoutManager;
import android.support.v7.widget.RecyclerView;
import android.view.View;
import android.view.animation.Animation;
import android.view.animation.AnimationUtils;
import android.widget.ImageView;

import com.squareup.picasso.Picasso;

import java.util.ArrayList;
import java.util.List;

public class MainActivity extends AppCompatActivity {

    List<Book> lstBook ;
    FloatingActionButton fab_plus, fab_about, fab_logout;
    Animation FabOpen, FabClose, FabRClockwise, FabRAnticlockwise;
    boolean isOpen = false;
    ImageView imageview;

    String url1 = "https://images-na.ssl-images-amazon.com/images/I/51yCvlBVEQL.jpg";

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        imageview = (ImageView)findViewById(R.id.book_img_id);
        //loadImageFromUrl1(url1);

        lstBook = new ArrayList<>();
        lstBook.add(new Book(getString(R.string.title13),getString(R.string.aut13),getString(R.string.desc13),R.drawable.go1984));
        lstBook.add(new Book(getString(R.string.title14),getString(R.string.aut14),getString(R.string.desc14),R.drawable.goanimalfarm));
        lstBook.add(new Book(getString(R.string.title18),getString(R.string.aut18),getString(R.string.desc18),R.drawable.annefrank));
        lstBook.add(new Book(getString(R.string.title19),getString(R.string.aut19),getString(R.string.desc19),R.drawable.killmockingbird));
        lstBook.add(new Book(getString(R.string.title15),getString(R.string.aut15),getString(R.string.desc15),R.drawable.metro2033));
        lstBook.add(new Book(getString(R.string.title16),getString(R.string.aut16),getString(R.string.desc16),R.drawable.metro2034));
        lstBook.add(new Book(getString(R.string.title17),getString(R.string.aut17),getString(R.string.desc17),R.drawable.metro2035));
        lstBook.add(new Book(getString(R.string.title21),getString(R.string.aut21),getString(R.string.desc21),R.drawable.dbdavincicode));
        lstBook.add(new Book(getString(R.string.title22),getString(R.string.aut22),getString(R.string.desc22),R.drawable.dblostsymbol));
        lstBook.add(new Book(getString(R.string.title23),getString(R.string.aut23),getString(R.string.desc23),R.drawable.dbinferno));
        lstBook.add(new Book(getString(R.string.title24),getString(R.string.aut24),getString(R.string.desc24),R.drawable.dborigin));
        lstBook.add(new Book(getString(R.string.title1),getString(R.string.aut1),getString(R.string.desc1),R.drawable.sagaoftanyatheevil1));
        lstBook.add(new Book(getString(R.string.title2),getString(R.string.aut2),getString(R.string.desc2),R.drawable.sagaoftanyatheevil2));
        lstBook.add(new Book(getString(R.string.title3),getString(R.string.aut3),getString(R.string.desc3),R.drawable.sagaoftanyatheevil3));
        lstBook.add(new Book(getString(R.string.title5),getString(R.string.aut5),getString(R.string.desc5),R.drawable.overlord1));
        lstBook.add(new Book(getString(R.string.title6),getString(R.string.aut6),getString(R.string.desc6),R.drawable.overlord2));
        lstBook.add(new Book(getString(R.string.title7),getString(R.string.aut7),getString(R.string.desc7),R.drawable.overlord3));
        lstBook.add(new Book(getString(R.string.title8),getString(R.string.aut8),getString(R.string.desc8),R.drawable.overlord4));



        RecyclerView myrv = (RecyclerView) findViewById(R.id.recyclerview_id);
        RecyclerViewAdapter myAdapter = new RecyclerViewAdapter(this,lstBook);
        myrv.setLayoutManager(new GridLayoutManager(this,3));
        myrv.setAdapter(myAdapter);


        //floating action button code starts here
        fab_plus = (FloatingActionButton) findViewById(R.id.fab_plus);
        fab_logout = (FloatingActionButton) findViewById(R.id.fab_logout);
        fab_about = (FloatingActionButton) findViewById(R.id.fab_about);

        FabOpen = AnimationUtils.loadAnimation(getApplicationContext(),R.anim.fab_open);
        FabClose = AnimationUtils.loadAnimation(getApplicationContext(),R.anim.fab_close);
        FabRClockwise = AnimationUtils.loadAnimation(getApplicationContext(),R.anim.rotate_clockwise);
        FabRAnticlockwise = AnimationUtils.loadAnimation(getApplicationContext(),R.anim.rotate_anticlockwise);

        fab_plus.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                if(isOpen){

                    fab_about.startAnimation(FabClose);
                    fab_logout.startAnimation(FabClose);
                    fab_plus.startAnimation(FabRAnticlockwise);
                    fab_logout.setClickable(false);
                    fab_about.setClickable(false);
                    isOpen = false;

                }
                else{

                    fab_about.startAnimation(FabOpen);
                    fab_logout.startAnimation(FabOpen);
                    fab_plus.startAnimation(FabRClockwise);
                    fab_logout.setClickable(true);
                    fab_about.setClickable(true);
                    isOpen = true;

                }
            }
        });

        fab_about.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(new Intent(MainActivity.this,AboutActivity.class));
            }
        });

        fab_logout.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(new Intent(MainActivity.this,Login.class));
            }
        });

        //for logout action
        logout();
    }

    private void loadImageFromUrl1(String url1) {
        Picasso.with(this).load(url1).placeholder(R.mipmap.ic_launcher)
        .error(R.mipmap.ic_launcher)
        .into(imageview, new com.squareup.picasso.Callback(){

            @Override
            public void onSuccess(){

            }

            @Override
            public void onError(){

            }
        });
    }

    private void deletepreference(){
        SharedPreferences preferences = getSharedPreferences("LoginPreference", MODE_PRIVATE);
        preferences.edit().remove("username").commit();
        preferences.edit().remove("password").commit();
    }

    private void logout() {
        fab_logout.setOnClickListener(view -> showAlertDialog());
    }

    public void showAlertDialog() {
        new AlertDialog.Builder(this)
                .setMessage("Do you want to logout?")
                .setCancelable(false)
                .setPositiveButton("Yes", new DialogInterface.OnClickListener() {
                    public void onClick(DialogInterface dialog, int id) {
                        deletepreference();
                        Intent login = new Intent(MainActivity.this, Login.class);
                        startActivity(login);
                        finish();
                    }
                })
                .setNegativeButton("No", null)
                .show();
    }

}
