package br.com.criandoapi.projeto.service;

import java.util.List;

import org.springframework.stereotype.Service;

import br.com.criandoapi.projeto.model.Usuario;
import br.com.criandoapi.projeto.repository.IUsuario;
@Service
public class UsuarioServecie {

    private IUsuario repository;
    
    public UsuarioServecie(IUsuario repository) {
        this.repository = repository;
    }
    
    public List<Usuario> listarUsuario() {
        List<Usuario> lista = repository.findAll();
        return lista;
    }
    
}
